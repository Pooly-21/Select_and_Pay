<?php

class Car {

    // ----------------------- fields --------------------------
    private $id;
    private $model;
    private $manufacturer;
    private $price;
    private $image;
    private $available = 1;

    public function __construct($model, $manufacturer, $price, $image) {

        $this->model = $model;
        $this->manufacturer = $manufacturer;
        $this->price = $price;  
        $this->image = $image;
    }

    // ----------------------- methods --------------------------

    public static function createCarFromDb($row) {

        $car = new Car($row->model, $row->manufacturer, $row->price, $row->image);
        $car->setId($row->id);
        $car->setAvailable($row->available);

        return $car;
    }


    // returns "true" if car is able to be sold and" false" if car is out of stock
    public function sellCar() {

        if ($this->available) {
        
            $this->available = 0;
            return true;

        } else {  
            return false;
        }
    }

    // multiplies price property of instance and returns full price of car
    public function calcFullPrice() {
        return $this->price * 72;
    }
    
    // return templates to display whether car is available to purchase or not
    public function displayAvailibility() {

        if ( $this->available == 1 ) {
            return "<li style='color:green;'>In stock</li>";
            
        } else if( $this->available == 0) {
            return "<li style='color:red;'>Out of stock</li>";
        }
    }

    // --------------- Getters and Setters -------------------

 
    public function getModel()
    {
        return $this->model;
    } 
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }


    public function getManufacturer()
    {
        return $this->manufacturer;
    }
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }


    public function getImage()
    {
        return $this->image;
    }
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of available
     */ 
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Set the value of available
     *
     * @return  self
     */ 
    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}