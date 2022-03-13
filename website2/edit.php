<?php

include('conn.inc.php');
include('functions.inc.php');


session_start();

 if(!isset($_SESSION['login'])){   
      echo "<script>alert(\"You must Be logged in to view this page\")</script>";
       header("Location: index.php "); 

   }




?>
<!DOCTYPE html>
  <html lang="en">
<head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Content Management System</title>
          <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body>
      <?php
    include('navbar.php');
    ?>
<div class="container">

	
	
      <div class="page-header">
        <h1>Edit <?php echo $row->eventName; ?></h1>
      </div>
    
    <form name="form1" method="post" action="editRecord.php">
            <div class="form-group col-md-4">
                    
                    <input name="eventID" type="hidden" value="<?php echo $row->eventID; ?>"> 

                    <label for="eventName">eventName</label>
                    <input type="text" name="eventName" id="eventName"  class="form-control" value="<?php echo $row->eventName; ?>">
                  
           </div> 
                       <div class="form-group col-md-4">
                    
                  
                    <label for="eventDate">eventDate</label>
                    <input type="date" name="eventDate" id="eventDate"  class="form-control" value="<?php echo $row->eventDate; ?>">
                  
           </div> 
                                  <div class="form-group col-md-4">
                    
                  
                    <label for="eventTime">eventTime</label>
                    <input type="time" name="eventTime" id="eventTime"  class="form-control" value="<?php echo $row->eventTime; ?>">
                  
           </div> 

           <div class="form-group col-md-4">
                    
                  
                    <label for="eventLocation">eventLocation</label>
                    <input type="text" name="eventLocation" id="eventLocation"  class="form-control" value="<?php echo $row->eventLocation; ?>">
                  
           </div> 
           <div class="form-group col-md-4">
                    
                  
                    <label for="eventPlayers">eventPlayers</label>
                    <input type="text" name="eventPlayers" id="eventPlayers"  class="form-control" value="<?php echo $row->eventPlayers; ?>">
                  
           </div> 
           <div class="form-group col-md-4">
                    
                  
                    <label for="eventNumberPlayer">eventNumberPlayer</label>
                    <input type="text" name="eventNumberPlayer" id="eventNumberPlayer"  class="form-control" value="<?php echo $row->eventNumberPlayer; ?>">
                  
           </div> 

           <div class="form-group">             
                  <p>
                    <input type="submit" name="button" id="button" value="Update" class="btn btn-primary">


                  </p>
         </div>
</form>
            

</div>
 <?php 
  include("footer.php");

  ?>
  <script src="jquery-3.3.1.slim.min.js"></script>
<script src="bootstrap.min.js"></script>
<script src="popper.min.js"></script>
</body>
</html>