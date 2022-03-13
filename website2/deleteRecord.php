<?php




session_start();
if($_SESSION["currentUser"] == "admin" || $_SESSION["currentUser"] == $row->eventCreator ){


}else{
   header("Location: index.php"); 

}





session_start();
include('conn.inc.php');
include('functions.inc.php');

$seventID = safeString($_GET['eventID']); 




$sql = "DELETE FROM eventData WHERE eventID = :eventID"; 

$stmt = $pdo->prepare($sql);                                      
$stmt->bindParam(':eventID', $seventID, PDO::PARAM_STR);      


$stmt->execute(); 


 header("Location:" .$_SERVER["HTTP_REFERER"]); 
exit;
?>
