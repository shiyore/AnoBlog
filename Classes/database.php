<?php
//Written by: Aiden Yoshioka
//CST-323
//01-10-21
//This is my own work that I am repurposing from PHP 2.

require_once('log.php');
class database{
    private $logger;
    public function __construct(){
        $this->logger = new log();
    }
    function getConnected(){
        $this->logger->info("Entering " . __METHOD__ );
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
        $this->logger->info("Exiting " .__METHOD__ );
        return $this->dbconnect;
    }
    function disconnect($connect)
    {
        $this->logger->info("Entering " . __METHOD__ );
        $connect->close;
        $this->logger->info("Exiting " .__METHOD__ );
    }
}
?>