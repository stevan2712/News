<?php

class Database{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "news33";


    public function connectToDatabase(){
        $conn=new mysqli($this->servername,$this->username,$this->password,$this->dbname);
        if($conn-> connect_errno){
            echo "Failed to connect to database";
        }


        return $conn;

    }

}