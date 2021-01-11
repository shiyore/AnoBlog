<?php
//Written by: Aiden Yoshioka
//CST-323
//01-10-21
//This is my own work repurposed from my PHP 2 work

require_once("database.php");

class thread_data_service{
    function __construct(){
    }
    
   function addThread($thread_title,$thread_text){
        $database = new Database();
        $connection = $database->getConnected();

        $sql = "INSERT INTO `threads`(`title`, `text`) VALUES ('$thread_title', '$thread_text')";
       print($sql);
        $connection->query($sql);
    }
    
    function getThreads(){
        $database = new Database();
        $connection = $database->getConnected();

        $query_string = "SELECT * FROM threads";
        if ($result = $connection->query($query_string))
        {
            $nbrRows = $result->num_rows;
            $count = 0;
            if ($nbrRows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    //add the orderid's to the orderID array
                    //$oidArr[$count] = $row["title"];
                    $count++;
                    print("Title: " . $row["title"] . ", Text: " . $row["text"] . "<br/>");
                }
                return $result;
            }
        }
    }
}
?>