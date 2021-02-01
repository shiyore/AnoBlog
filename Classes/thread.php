<?php
//Written by: Aiden Yoshioka
//CST-323
//01-10-21
//This is my own work

//haven't implemented this yet, due to time restrictions
class thread {
    public $id;
    public $title;
    public $text;
    
    
    function __construct($id,$title,$text){
        $this->id = $id;
        $this->title = $title;
        $this->text = $text;
    }
    
}
?>