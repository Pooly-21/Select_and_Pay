<?php

require_once __DIR__ . "/../model/User.php";
require_once __DIR__ . "/../config/DatabaseConfig.php";

// Data Access Object
class UserDAO {

    /* --------------------------------------------  Create  -------------------------------------------------- */

    public function createUser($DatabaseConfig, $User) {

        $conn = $this->databaseConfig->connect();

        // SQL statement
        $statement = "INSERT INTO user (id, username, password, email)" .
                     "VALUES ('".$User->getId()."','".$User->getUsername()."','".$User->getPassword()."','".$User->getEmail()."')";

        // Send request
        if ($result = $conn->query($statement)) {

            $conn->close();
            return $result; // either true or false

        } else {
            // die function is used to kill conn to database and usually used in error handling
            die("Connection failed: " . $conn->error); //die function to close conn in case of error
        }
    }

    
    /* --------------------------------------------  Read By Username -------------------------------------------------- */

    public function readByUsername($DatabaseConfig, $username, $password) {

        // connect to DB
        $conn = $this->databaseConfig->connect();

        // SQL statement
        $statement = "SELECT * FROM user WHERE username='$username'";

        if ($result = $conn->query($statement)) {

            // get only 1 single result
            $row = $result->fetch_object(); // returns a PHP stdObject

            // only call parse function if object exists in database and if the password passed as an argument
            // is the same as the password in the database, create a new User object and return it
            if ($row !== null && $password == $row->password) {

                $userObject = new User(
                    $row->username,
                    $row->password,
                    $row->email,
                    $row->role
                );
                    
                $userObject->setId($row->id);

                $conn->close();
                return $userObject;
            }  
                                        
        } else {

            echo $conn->error;
            die("Connection failed: " . $conn->error); //die function to close conn in case of error
        }

        $conn->close();
    }


    /* --------------------------------------------  Read All  -------------------------------------------------- */

    public function readAll($DatabaseConfig) {

        // connect to DB
        $conn = $this->databaseConfig->connect();

        // create temporary variable to store users being returned from database
        $usersFromDb = [];

        // SQL statement : select all rows from table user
        $statement = "SELECT * FROM user";

        if ($result = $conn->query($statement)) {

            // wrap fetch_object function in a while loop
            // this allows use to repeatadly fetch rows from the database untill no more rows exist, since the condition will be false
            while($row = $result->fetch_object()) {

                // create new user object from current row
                $userObject = new User($row->username,$row->password,$row->email,$row->role);

                // set the id of the user object == to the id obtained from the row inside the database
                $userObject->setId($row->id);

                // push newly instantiated User object into $userFromDb array
                array_push($usersFromDb, $userObject);
            } 
            
            // once loop is finished all rows have been pulled we return the array and close conn
            $conn->close();
            return $usersFromDb;           
            
        } else {

            echo $conn->error;
            die("Connection failed: " . $conn->error); //die function to close conn in case of error
        }

        $conn->close();
    }


    /* --------------------------------------------  Update  -------------------------------------------------- */

    function updateById($DatabaseConfig, $id, $username, $password, $email, $role) {

        // Connect to database and return conn object
        $conn = $this->databaseConfig->connect();
    
        // the statement that gets sent to the database
    
        //           "INSERT INTO user (username, password) VALUES('$username', '$password')";
        $statement = "  UPDATE user 
                        SET username='$username', password='$password' , email='$email' , role='$role' 
                        WHERE id='$id'";
    
        // Send request
        if ($result = $conn->query($statement)) {
    
            $conn->close();
            return $result; 
       
        } else {
            // die function is used to kill conn to database and usually used in error handling
            die("Connection failed: " . $conn->error); //die function to close conn in case of error
        }
    
    }


    /* --------------------------------------------  Delete  -------------------------------------------------- */

    function deleteById($DatabaseConfig, $id) {

        // Connect to database and return conn object
        $conn = $this->databaseConfig->connect();
    
        // delete from user table where id == $id parameter
        $statement = "DELETE FROM user WHERE id=$id";
    
        // Send request
        if ($result = $conn->query($statement)) {
            
            $conn->close();
            return $result; // either true or false
    
        } else {
            // die function is used to kill conn to database and usually used in error handling
            die("Connection failed: " . $conn->error); //die function to close conn in case of error
        }
    
    }
}