<?php 
//Written by: Aiden Yoshioka
//CST-323
//01-10-21
//This is my code

//navbar
include("Layouts/header.php"); 

//class imports
require("../Classes/thread_data_service.php");
$data = new thread_data_service();
$threads = $data->getThreads();


      while($thread = $threads->fetch_assoc())
      {
          $title = $thread["title"];
          $text = $thread["text"];
          print($thread["text"]);
      ?>
        <!-- This is where we put in the html code to show the products -->
        <div class="col-sm-3 box_color">
          
          <div Style="height: 450px;" class="thumbnail">
            <h3><?php echo $title; ?></h3>
            <p><?php echo $thread["text"]; ?></p>
          </div>
        </div>
  
<?php      
    }
?>