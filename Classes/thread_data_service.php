<?php
//Written by: Aiden Yoshioka
//CST-323
//01-10-21
//This is my own work repurposed from my PHP 2 work

require_once("database.php");
require_once("thread.php");

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
    
    //Simply returns an array of thread objects
    function getThreads(){
        //this was kind of a pain to get working as I wanted, on short notice.
        $database = new Database();
        $connection = $database->getConnected();
        $posts = array();
        

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
                    array_push($posts,new thread($row["id"],$row["title"],$row["text"]));
                    //print("Title: " . $row["title"] . ", Text: " . $row["text"] . "<br/>");
                }
                //print_r($posts);
                return $posts;
            }
        }
    }
    
    //this is a very poorly implemented method to update an entry. If I had more time, I would have used this method a lot better
    function updateThread($thread){
        $database = new Database();
        $connection = $database->getConnected();

        $sql = "UPDATE `threads` SET `title`='$thread->title',`text`='$thread->text' WHERE `id`=$thread->id";
        print($sql);
        $connection->query($sql);
    }
    //Does exactly as it says, it allows the user to delete a thread from a passed in thread object (hopefully)
    function deleteThread($thread){
        $database = new Database();
        $connection = $database->getConnected();

        $sql = "DELETE FROM `threads` WHERE id = $thread->id";
       print($sql);
        $connection->query($sql);
    }
}
?>