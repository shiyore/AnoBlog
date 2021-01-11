<?php
//Written by: Aiden Yoshioka
//CST-323
//01-10-21
//This is my own work

//This is for handling the creation of a new thread
require("../../Classes/thread_data_service.php");

//getting form data
$title = $_POST['thread_title'];
$text = $_POST['thread_text'];


//adding a new thread to the database
$data = new thread_data_service();
$data->addThread($title,$text);


//redirect to threads page
header("Location: ../threads.php");
?>