<?php 
//Written by: Aiden Yoshioka
//CST-323
//01-10-21
//This is my code mixed with some of bootstrap's css classes

    //navbar
    include("Layouts/header.php"); 
?>

<div class="container">
  <div class="row">
    <div class="col-sm-2">
      
    </div>
    <div class="col-sm-8">
        <form action="Handlers/new_thread_handler.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Thread Title</label>
                <input type="text" class="form-control" name="thread_title" id="thread_title" placeholder="Example Title">
                <small id="title_help" class="form-text text-muted">Please attempt to give the thread a UNIQUE title.</small>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Thread Text</label>
                <textarea class="form-control" name="thread_text" id="text" rows="3"></textarea>
                <small id="text_help" class="form-text text-muted">Please add some text to the thread.</small>
            </div>
            <button name="submit_button" type="submit" class="btn btn-primary ">Submit</button>
        </form>
    </div>
    <div class="col-sm-2">
      
    </div>
  </div>
</div>
