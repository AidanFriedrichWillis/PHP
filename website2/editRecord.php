<?php
include('conn.inc.php');
include('functions.inc.php');
session_start();

$seventName = safeString($_POST['eventName']); 
$seventDate = safeString($_POST['eventDate']); 
$seventTime = safeString($_POST['eventTime']); 

$seventLocation = safeString($_POST['eventLocation']); 
$seventPlayers  = safeString($_POST['eventPlayers']); 
$seventNumberPlayer = safeInt($_POST['eventNumberPlayer']); 
 $seventID = safeString($_POST['eventID']); 





$sql = "UPDATE eventData SET eventName = :eventName,
                          eventDate = :eventDate,
                          eventTime = :eventTime,
                          eventLocation = :eventLocation,
                          eventPlayers = :eventPlayers,
                          eventNumberPlayer = :eventNumberPlayer
                          WHERE eventID = :eventID"; $stmt = $pdo->prepare($sql);                                      
$stmt->bindParam(':eventName', $seventName, PDO::PARAM_STR);      
$stmt->bindParam(':eventDate', $seventDate, PDO::PARAM_STR);  
$stmt->bindParam(':eventTime', $seventDate, PDO::PARAM_STR);  

$stmt->bindParam(':eventLocation', $seventLocation, PDO::PARAM_STR); 
$stmt->bindParam(':eventPlayers', $seventPlayers, PDO::PARAM_STR);     
$stmt->bindParam(':eventNumberPlayer', $seventNumberPlayer, PDO::PARAM_INT);   
$stmt->bindParam(':eventID', $seventID, PDO::PARAM_INT);   

$stmt->execute(); 

if($_SESSION["currentUser"] == "admin"){
 header("Location: cms.php");

}
else{
	header("Location: index.php");
}





exit;
?>
