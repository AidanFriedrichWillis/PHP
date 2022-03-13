<?php


session_start();
include('conn.inc.php');
include('functions.inc.php');

$susername = safeString($_POST['userName']); 
$spassword = safeString($_POST['password']); 

if($susername != "" || $spassword != ""){


$sql= "SELECT * FROM userData WHERE userName = :userName";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':userName', $susername, PDO::PARAM_INT); 
$stmt->execute();
$row = $stmt->fetchObject();
 


 if($row->password == $spassword){
 	$_SESSION['login'] = 1; 
 	$_SESSION['currentUser'] = $susername; 
 	
 }
}


 header("Location:" .$_SERVER["HTTP_REFERER"]); 

?>