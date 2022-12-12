<?php

class User {

    // ===================================== Fields =========================================
    
    private $id;
    private $username;
    private $password;
    private $email;

    // ===================================== Constructor =========================================
    
    public function __construct($username,$password,$email) {

        $this->username = $username;
        $this->password = $password;
        $this->email = $email;

        $this->id = $this->generateId();
    }

    // ===================================== Methods =========================================

    private function generateId() {

        $randomNumber = rand(10000, 90000);
        $id = md5($randomNumber);

        switch ($this->role) {

            case 'admin':
                $adminCode = "A#";
                return $adminCode . $id;
                break;
            
            case 'customer':
                $customerCode = "A#";
                return $customerCode . $id;
                break;
            
            default:
                return "error in creating user id";
                break;
        }
    }

    // public function createUser($User) {

    //     $DbConfig = new DatabaseConfig(); 
    //     $conn = $DbConfig->connect();

    //     // SQL statement
    //     $statement = "INSERT INTO property (id, username, password, email)" .
    //                  "VALUES ('$User->id','$User->username','$User->password','$User->email')";

    //     // Send request
    //     if ($result = $conn->query($statement)) {

    //         return $result; // either true or false
    //         $conn->close();

    //     } else {
    //         // die function is used to kill conn to database and usually used in error handling
    //         die("conn failed: " . $conn->error); //die function to close conn in case of error
    //     }
    // }

    // ===================================== Get & Set =========================================

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    public function getUsername()
    {
        return $this->username;
    }
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }


    function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }


    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}