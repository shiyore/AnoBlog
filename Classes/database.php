<?php
//Written by: Aiden Yoshioka
//CST-323
//01-10-21
//This is my own work that I am repurposing from PHP 2.

class database{
    function getConnected(){
        //echo "Database->getconnected invoked";
        $this->dbhost = 'localhost';
        $this->dbuser = 'root';
        $this->dbpass = 'root';
        $this->dbname = 'anoblog';
        $this->port = '';
        
        //connect to the db
        $this->dbconnect = new mysqli($this->dbhost , $this->dbuser , $this->dbpass,$this->dbname);
        if($this->dbconnect->connect_error){
            die('Failed to connect to MySQL: ' . $this->dbconnect->connect_error);
        }
        //return the connection
        //echo "connected";
        return $this->dbconnect;
    }
    function disconnect($connect)
    {
        $connect->close;
    }
}
?>