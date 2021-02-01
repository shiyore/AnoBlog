<?php
//Written by: Aiden Yoshioka
//CST-323
//01-18-21
//This is my own work

//This is for either editing or deleting a thread
require("../../Classes/thread_data_service.php");
//require("../../Classes/thread.php");

//getting form data
$temp_thread = new thread($_POST["thread_id"],$_POST["thread_title"], $_POST["thread_text"]);
print($_POST["thread_title"] . ": " . $_POST["thread_text"] . "\n");
//$id = $_POST["thread_id"];
//$title = $_POST['thread_title'];
//$text = $_POST['thread_text'];


$data = new thread_data_service();

if(isset($_POST["submit_button"])){
    //print("Submition");
    $data->updateThread($temp_thread);
}
elseif(isset($_POST["delete_button"])){
    //print("Deletion");
    $data->deleteThread($temp_thread);
}
//adding a new thread to the database
//$data = new thread_data_service();
//$data->addThread($title,$text);


//redirect to threads page
header("Location: ../threads.php");
?>