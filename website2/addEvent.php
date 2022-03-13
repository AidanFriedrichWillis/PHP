

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
          <title>Create Event PVE</title>
          <link href="bootstrap.min.css" rel="stylesheet">
          <link href="styles.css" rel="stylesheet">
</head>
<body>
<div class="container">

	<?php
	include('navbar.php');
	?>
	
      <div class="page-header">
        <h1>Insert Event</h1>
      </div>
    
            
      <form name="form1" method="post" action="insertRecord.php" onsubmit="return validateForm()">
            <div class="form-group col-md-4">

                  	<label for="eventName">eventName</label>
                    <input type="text" name="eventName" id="eventName"  class="form-control">
                  
           </div> 
          
            <div class="form-group col-md-4">       
                  
                    <label for="eventLocation">eventLocation</label>
                    <input type="text" name="eventLocation" id="eventLocation"  class="form-control">
                  
          </div> 
                      <div class="form-group col-md-4">      
                  
                    <label for="eventDate">eventDate </label>
                    <input type="date" name="eventDate" id="eventDate"  class="form-control">
                  
          </div> 
        <div class="form-group col-md-4">      
                  
                    <label for="eventTime">eventTime </label>
                    <input type="time" name="eventTime" id="eventTime"  class="form-control">
                  
          </div> 



          <div class="form-group col-md-4">      
                  
                    <label for="eventPlayers">eventPlayers</label>
                    <input type="text" name="eventPlayers" id="eventPlayers"  class="form-control">
                  
          </div> 
           
         
           <div class="form-group col-md-12">             
                  <p>
                    <input type="submit" name="button" id="button" value="Create Event" class="btn btn-primary">
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
<script src="formval.js"></script>

</body>
</html>