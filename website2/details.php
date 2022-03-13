<?php
include('conn.inc.php');
include('functions.inc.php');

$eventID = $_GET['eventID'] ? $_GET['eventID'] : 0;
$seventID = safeInt($eventID);



$sql= "SELECT * FROM eventData WHERE eventID = :eventID";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':eventID', $_GET['eventID'], PDO::PARAM_INT); 
$stmt->execute();
$totalnoFilms = $stmt->rowCount();
$row = $stmt->fetchObject();

if($totalnoFilms == 0){  header('Location: notFound.php'); }
?>
<!DOCTYPE html>
    <?php
    include('navbar.php');
    ?>
  
    
      <div class="page-header">
        <h1><?php echo $row->eventName;?></h1>
      </div>
    
    <div class="row">

            <div class="col-md-8">
					<?php
					// format the date output
					echo "<p>Date: $row->eventDate</p>";
					echo "<p>Location: $row->eventLocation</p>";
          echo "<p>Players: $row->eventPlayers</p>";

                    ?>
            </div>
    </div>
</div>
 <?php 
  include("footer.php");

  ?></body>
</html>