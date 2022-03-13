<!DOCTYPE html>
 <?php
    include('navbar.php');
    ?>
<body>
<div class="container">

	
      <div class="page-header">
        <h1>Create Account</h1>
      </div>
    
            
     <form id="loginFormc" name="loginFormc" method="post" action="insertUserLogic.php" onsubmit="return validateForm2()">
                  <label for="userNamec">Username</label>
                  <input name="userNamec" type="text" id="userNamec">
                  <label for="password">Password</label>
                  <input name="passwordc" type="password" id="passwordc">
                  <input type="submit" name="Submit" value="Login">
</form>

</form>

</div>
 <?php 
  include("footer.php");

  ?>
<script src="jquery-3.3.1.slim.min.js"></script>
<script src="bootstrap.min.js"></script>
<script src="popper.min.js"></script>
<script src="formval.js"></script>

</body>
</html>