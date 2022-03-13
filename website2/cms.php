<?php
include('conn.inc.php');
include('functions.inc.php');
session_start();
if($_SESSION["currentUser"] != "admin"){

 header("Location: index.php"); 

}


$sql= "SELECT * FROM eventData";
$stmt = $pdo->prepare($sql);
$stmt->execute();

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
        <h1>Content Management System</h1>
      </div>
    
    <div class="row">
            <div class="col-md-12">
            <p><a href="addEvent.php" class="btn btn-success">Create an Event</a></p>
              <table class="table table-striped">
              		<thead>
                        <tr>
                            <th>Event</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>View</th>
                        </tr>
                    </thead>
					<?php 
					while($row = $stmt->fetchObject()){
								echo "<tr>";
								echo "<td>$row->eventName</td>";	
                				echo "<td><a href=\"edit.php?eventID= $row->eventID\">Edit</a></td>"; 
                				echo "<td><a href=\"deleteRecord.php?eventID= $row->eventID\">Delete</a></td>"; 
                				echo "<td><a href=\"details.php?eventID= $row->eventID\">View</a></td>"; 
								echo "</tr>";         
					}
                    ?>
            </table>
            </div>
    </div>
    
</div>
 <?php 
  include("footer.php");

  ?>
<script src="../js/jquery-3.3.1.slim.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/popper.min.js"></script>
</body>
</html>