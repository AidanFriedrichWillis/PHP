<?php
include('conn.inc.php');
include('functions.inc.php');
session_start();

$soldPassword = safeString($_POST['oldPassword']); 
$snewPassword = safeString($_POST['newPassword']); 
$scurrentUser = safeString($_SESSION["currentUser"]); 


$sql= "SELECT * FROM userData WHERE userName LIKE :userName";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':userName', $scurrentUser, PDO::PARAM_INT); 
$stmt->execute();
$row = $stmt->fetchObject();
 
if($row->password == $soldPassword){
	$sql = "UPDATE userData SET password = :newPassword
                         
                          WHERE userName =  :currentUser";
                           $stmt = $pdo->prepare($sql);                                      
	$stmt->bindParam(':newPassword', $snewPassword, PDO::PARAM_STR);      
	$stmt->bindParam(':currentUser', $scurrentUser, PDO::PARAM_STR);      

	$stmt->execute(); 

	echo "<script> alert(\"Password reset Succsess\") </script>";
	echo "Going into if";
	 header("Location: account.php"); 

}

else{

	echo "<script> alert(\"Wrong Password\") </script>";
	 header("Location:" .$_SERVER["HTTP_REFERER"]); 


}



exit;
?>
