<?php
include('conn.inc.php');
include('functions.inc.php');

session_start();
 if(!isset($_SESSION['login'])){   
      echo "<script>alert(\"You must Be logged in to view this page\")</script>";
       header("Location: index.php"); 

   }

   
$currentUser = $_SESSION["currentUser"];

$sql= "SELECT * FROM eventData WHERE eventCreater LIKE :currentUser";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':currentUser', $_SESSION["currentUser"], PDO::PARAM_STR); 
$stmt->execute();
$noOfEvent = $stmt->rowCount();


$sql2= "SELECT * FROM userData WHERE userName LIKE :currentUser";
$stmt2 = $pdo->prepare($sql2);
$stmt2->bindParam(':currentUser', $_SESSION["currentUser"], PDO::PARAM_INT); 
$stmt2->execute();
$rowuser = $stmt2->fetchObject();

?>
<!DOCTYPE html>

     <?php
    include('navbar.php');
    ?>
    
    
      <div class="page-header"> 
        <h1>UserName:  <?php echo $rowuser->userName;?></h1>
        <h1>Password:  <?php echo $rowuser->password;?></h1>
        <p><a href="passwordReset.php">Change Password</a></p>
        
        </div>
        <div class="row">
    	<div class="col-md-4">
		
            </div>
            <div class="col-md-8">
					<?php

          echo "<h2>A list of events you have created: <h2>";
          while($row = $stmt->fetchObject()){

              $currentEventDate = $row->eventDate;
              $currentEventTime = $row->eventTime;
                echo "<td>";
             echo "<p><a href=\"details.php?eventID=$row->eventID\"> $row->eventName</a></p>"; 
             echo "<p><a href=\"deleteRecord.php?eventID= $row->eventID\">Delete</a></p>"; 
             echo  "<p id=\"timer\"></p>";
             echo "<td>";

          }
        
        ?>      
          
            </div>
    </div>

    


</div>
  <?php 
  include("footer.php");

  ?>
    </div>
     <script src="jquery-3.4.1.min.js"></script>     
     <script src="main.js"></script>
     <script>

      
      var dateStr = '<?php echo $currentEventDate; ?>';
     var timeStr = '<?php echo $currentEventTime; ?>';
     console.log(dateStr);
     console.log(timeStr);
     var countDownDate = new Date(dateStr+"T"+timeStr).getTime();
     var x = setInterval(function() {
     var now = new Date().getTime();
     var distance = countDownDate - now;
     var days = Math.floor(distance / (1000 * 60 * 60 * 24));
     var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
     var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
     var seconds = Math.floor((distance % (1000 * 60)) / 1000);
     document.getElementById("timer").innerHTML = days + "d " + hours + "h "
     + minutes + "m " + seconds + "s ";
     if (distance < 0) {
      clearInterval(x);
       document.getElementById("timer").innerHTML = "Finished";
     }
     }, 1000);
   
</script>
   </body>
</html>