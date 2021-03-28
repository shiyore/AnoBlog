<?php
//loging info for 
include('Log4php/Logger.php');
class log{
    private $logger;
    public function __construct(){
        Logger::configure(__DIR__ . '/config.xml');
        $this->logger = Logger::getLogger("myLogger");
    }
    public function info($msg){
        $this->logger->info($msg);
    }
    public function warn($msg){
        $this->logger->warn($msg);
    }
    public function error($msg){
        $this->logger->error($msg);
    }
    public function debug($msg){
        $this->logger->debug($msg);
    }
}
?>
