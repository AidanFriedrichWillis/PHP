<div id="login">
<?php 


?>
<form id="loginForm" name="loginForm" method="post" action="loginLogic.php" onsubmit="return validateForm3()">
                  <label for="userName">Username</label>
                  <input name="userName" type="text" id="userName">
                  <label for="password">Password</label>
                  <input name="password" type="password" id="password">
                  <input type="submit" name="Submit" value="Login">
</form>
<form id="createAccount" name="createAccount" method="post" action="insertUser.php">
                  <input type="submit" name="createAccount" value="createAccount">
</form>

<?php 

?>
</div>
<script src="formval.js"></script>
