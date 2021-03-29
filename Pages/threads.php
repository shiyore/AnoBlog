<?php 
//Written by: Aiden Yoshioka
//CST-323
//01-10-21
//This is my code

//navbar
include("Layouts/header.php"); 

//class imports
require("../Classes/thread_data_service.php");
?>

<html lang="en">
<head>
</head>
<body>

<div class="container">
    <h3 class="text-center">Threads (Demonstrating automatic build and deploy with build pipeline)</h3>
      <div class="container box_color">
      <div class="row">
        <?php
          $data = new thread_data_service();
          $threads = $data->getThreads();


      foreach($threads as $thread)
      {
          $title = $thread->title;
          $text = $thread->text;
      ?>
    <div class="media position-relative border border-dark ml-3 mb-1">
  <div class="media-body">
    <h5 class="mt-0 card-header"><?php echo $title; ?></h5>
    <p><?php echo $text; ?></p>
    <a href="/Pages/edit_thread.php?id=<?php echo $thread->id;?>&title=<?php echo $thread->title;?>&text=<?php echo $thread->text;?>" class="stretched-link">Expand</a>
  </div>
</div>
  
<?php      
    }
?>
    </div>
  </div>
</div>

</body>
</html>