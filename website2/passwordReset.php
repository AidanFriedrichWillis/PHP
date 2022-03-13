<?php

include('conn.inc.php');
include('functions.inc.php');
session_start();

 if(!isset($_SESSION['login'])){   
      echo "<script>alert(\"You must Be logged in to view this page\")</script>";
       header("Location:" .$_SERVER["HTTP_REFERER"]); 

   }


?>
<!DOCTYPE html>
  <html lang="en">
<head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Password Reset</title>
          <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body>
      <?php
    include('navbar.php');
    ?>
<div class="container">

	
      <div class="page-header">
        <h1>Edit</h1>
      </div>
    
    <form name="form1" method="post" action="passwordResetLogic.php">
            <div class="form-group col-md-4">
                    
                    <label for="eventName">Old Password</label>
                    <input type="Password" name="oldPassword" id="oldPassword"  class="form-control">
                  
           </div> 
                       <div class="form-group col-md-4">
                    
                  
                    <label for="eventDate">New Password</label>
                    <input type="Password" name="newPassword" id="newPassword"  class="form-control">
                  
           </div> 
                         

           <div class="form-group">             
                  <p>
                    <input type="submit" name="button" id="button" value="Change" class="btn btn-primary">


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