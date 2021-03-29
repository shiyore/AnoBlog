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
        $this->dbhost = 'j21q532mu148i8ms.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
        $this->dbuser = 'vu1q2b90881brqaz';
        $this->dbpass = 'onpqdxt92h41ycms';
        $this->dbname = 'xc75zuckgn15l4js';
        $this->port = '3306';
        
        //connect to the db
        $this->dbconnect = new mysqli($this->dbhost , $this->dbuser , $this->dbpass,$this->dbname,$this->port);
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