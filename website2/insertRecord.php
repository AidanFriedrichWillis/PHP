<?php

session_start();
include('conn.inc.php');
include('functions.inc.php');

$seventName = safeString($_POST['eventName']); 
$seventDate = safeString($_POST['eventDate']); 
$seventTime = safeString($_POST['eventTime']); 
$seventLocation = safeString($_POST['eventLocation']); 
$seventPlayers  = safeString($_POST['eventPlayers']); 
$seventCreater = safeString($_SESSION["currentUser"]); 




$sql = "INSERT INTO eventData (eventName, eventDate, eventTime, eventLocation, eventPlayers, eventCreater) VALUES (:eventName, :eventDate,:eventTime, :eventLocation, :eventPlayers, :currentUser)"; 

$stmt = $pdo->prepare($sql);                                      
$stmt->bindParam(':eventName', $seventName, PDO::PARAM_STR);      
$stmt->bindParam(':eventDate', $seventDate, PDO::PARAM_STR);  
$stmt->bindParam(':eventTime', $seventTime, PDO::PARAM_STR);  

$stmt->bindParam(':eventLocation', $seventLocation, PDO::PARAM_STR); 

$stmt->bindParam(':eventPlayers', $seventPlayers, PDO::PARAM_STR);     
$stmt->bindParam(':currentUser', $seventCreater, PDO::PARAM_INT);   


$stmt->execute(); 

	 header("Location:" .$_SERVER["HTTP_REFERER"]); 


exit;
?>
