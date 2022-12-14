<?php

require_once __DIR__ . "/../config/DatabaseConfig.php";
require_once __DIR__ . "/../model/Car.php";

class CarDAO {

    // ======= Fields =======

    private DatabaseConfig $databaseConfig;
    private $tableName = "car";

    // ===== Constructor =====

    public function __construct($databaseConfig) {
        
        $this->databaseConfig = $databaseConfig;
    }

    // ===== Methods ====

    // =================================== create new car ===================================
    public function create(Car $car) {

        $conn = $this->databaseConfig->connect();

        $statement = "INSERT INTO car (model, manufacturer, price, image, available) Values(
            '". $car->getModel() ."', 
            '". $car->getManufacturer() ."', 
            '". $car->getPrice() ."', 
            '". $car->getImage() ."', 
            '". $car->getAvailable() ."'
        )";

        if ($result = $conn->query($statement)) {

            $conn->close();
            return $result;
   
        } else {

            die("Query failed: " . $conn->error); //die function to close connection in case of error
            $conn->close();

        }
    }

    // =================================== Read all cars from database ===================================
    public function readAll() {

        $conn = $this->databaseConfig->connect();

        $carData = [];

        $statement = "SELECT * FROM car";

        if ($result = $conn->query($statement)) {

            while ($row = $result->fetch_object()) {

                $carObject = Car::createCarFromDb($row);

                array_push($carData, $carObject);
            }

            $conn->close();
            return $carData;

        } else {

            die($conn->error . "<br><br>"); //die function to close connection in case of error
            $conn->close(); // close connection
            
        }

    }


    // =================================== laod car by id ===================================
    public function readById($id) {

        $conn = $this->databaseConfig->connect();

        $statement = "SELECT * FROM car WHERE id='$id'";

        if ($result = $conn->query($statement)) {

            $row = $result->fetch_object();

            if ($row !== null) {
                
                $car = Car::createCarFromDb($row);
                $conn->close();
                return $car;
            }

        } else {

            $conn->close();
            die("Connection failed: " . $conn->error); //die function to close connection in case of error
        }
    }

    // =================================== update whole car ===================================
    public function update(Car $car) {

        $conn = $this->databaseConfig->connect();

        $statement = "UPDATE car
                      SET model = '".$car->getModel()."',
                          manufacturer = '".$car->getManufacturer()."',
                          price = '".$car->getPrice()."',
                          image = '".$car->getImage()."',
                          available = '".$car->getAvailable()."'
                      WHERE id='".$car->getId()."'
        ";

        if ($result = $conn->query($statement)) {

            $conn->close();
            return $result;

        } else {

            die($conn->error); //die function to close connection in case of error
            $conn->close();
         
        }
    }

    // =================================== sets available column to 0 ===================================
    public function updateSellCar(Car $car) {
        
        $conn = $this->databaseConfig->connect();

        $statement = "UPDATE car SET available = '0' WHERE id='".$car->getId()."'
        ";

        if ($result = $conn->query($statement)) {

            $conn->close();
            return $result;

        } else {

            die($conn->error); //die function to close connection in case of error
            $conn->close();
         
        }
    }

    // =================================== deletes a car by id ===================================    
    public function deleteById(){

    }

}


?>