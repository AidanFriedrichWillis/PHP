<?php
include('conn.inc.php');
include('functions.inc.php');



$eventName = isset($_GET['eventName']) ? $_GET['eventName'] : "";
 $dropdown =  $_GET['dropdown'] ?? null;

$seventName = safeString($eventName);

if(!is_null($eventName)){


	$searchTerm = "%".$seventName."%";

  switch ($dropdown) {
    case '1':
      $sql= "SELECT * FROM eventData WHERE eventName LIKE :eventName ORDER BY eventName ASC";
      break;
    case '2':
      $sql= "SELECT * FROM eventData WHERE eventName LIKE :eventName ORDER BY eventDate DESC";
      break;
    default:
      $sql= "SELECT * FROM eventData WHERE eventName LIKE :eventName";
      break;
  }

	
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':eventName', $searchTerm, PDO::PARAM_STR); 
	$stmt->execute();
	$noOfEvent = $stmt->rowCount();
}
?>
<!DOCTYPE html>
 <?php
    include('navbar.php');
    ?>
      
      <div class="page-header">
        <h1>Search for an event</h1>
      </div>
	
	
		<form>
			<div class="form-group row">
				<label for="eventID" class="col-md-2 col-form-label">Search by Event Name:</label>
				<div class="col-md-2">
					<input type="text" class="form-control" id="eventName" name="eventName">
				</div>
         <select id="dropdown" name="dropdown">
            <option value="0">Search Order</option>>
            <option value="1">A-Z</option>
            <option value="2">Most Recent</option>
         </select>

				<div class="col-md-2">
					<button type="submit" class="btn btn-primary">Search</button>
				</div>
			</div>
		</form>

	
	
    <div class="row">
            <div class="col-md-12">
					<?php
				if(!is_null($eventName)){
					if($noOfEvent == 0){
						echo "<p class=\"alert-danger\">Sorry No Results.</p>";	
					}else{
						echo "<p class=\"alert-success\">We found $noOfEvent events.</p>";	
						while($row = $stmt->fetchObject()){
								$timestampDate = strtotime($row->eventDate);
								$displayDate = date("D d M Y", $timestampDate);
								echo "<p><a href=\"details.php?eventID=$row->eventID\"> $row->eventName</a></p>";	
							}
						} 
					}
                    ?>
            </div>
    </div>
    <?php
    if(isset($_SESSION["login"])){
    	echo	"<form id=\"addEvent\" name=\"addEvent\" method=\"post\" action=\"addEvent.php\">
                  <input type=\"submit\" name=\"addEvent\" value=\"add Event\">
		</form>";
	}
		?>
	
</div>
  <?php 
  include("footer.php");

  ?>
    </div>
     <script src="jquery-3.4.1.min.js"></script>     
     <script src="main.js"></script></body>
</html>