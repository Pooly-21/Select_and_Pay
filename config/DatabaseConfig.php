<?php

class DatabaseConfig {

    private $host = 'localhost';
    private $user = 'root';
    private $password = 'root';
    private $db = 'strawhats_store';
    private $port = 3306;

    public function connect() {

        $conn = new mysqli($this->host, $this->user, $this->password, $this->db, $this->port);
        //check connection
        if ($conn->connect_error) {
            die ("Connection failed: " . $conn->connect_error); //use die function to close connection in case of error
            } else {
                return $conn;
            }
    }
}


?>