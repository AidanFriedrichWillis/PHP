<?php

include('conn.inc.php');
include('functions.inc.php');

$suserName = safeString($_POST['userNamec']); 
$spassword = safeString($_POST['passwordc']); 


$sql= "SELECT * FROM userData WHERE userName = :userName";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':userName', $suserName, PDO::PARAM_INT); 
$stmt->execute();
$noOfUser = $stmt->rowCount();
$row = $stmt->fetchObject();


if($noOfUser == 0){


$sql = "INSERT INTO userData (userName, password) VALUES (:userName , :password)"; 

$stmt = $pdo->prepare($sql);                                      
$stmt->bindParam(':userName', $suserName, PDO::PARAM_STR);      
$stmt->bindParam(':password', $spassword, PDO::PARAM_STR);  


$stmt->execute(); 
      echo "<script>alert(\"Account created Succsessfully\")</script>";

	 header("Location: index.php"); 


}
else{
      echo "<script>alert(\"UserName Taken\")</script>";
	 header("Location: insertUser.php"); 


}
	
?>
