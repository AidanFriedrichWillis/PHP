
<?php  

	$user = $_SESSION['currentUser'];
	
?>

<div id="login">
<p>Welcome <?php echo $user ?> - <a href="logoutLogic.php">Log Out</a></p>
</div>