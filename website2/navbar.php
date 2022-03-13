
<?php
ini_set("display_errors", 0);
session_start();
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home</title>
         <link       
     rel="stylesheet"       
     href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"       
     integrity="sha384fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"       
     crossorigin="anonymous"     
     />
      <link rel="stylesheet" href="mobilea.css" /> 

     <link       
      rel="stylesheet"       
      href="desktopa.css"       
      media="only screen and (min-width : 720px)"     
      />
  </head>
  <body>
    <div class="container">
      <header> 

            <?php 
       

      if(isset($_SESSION['login'])){   
        include('session-logout.inc.php'); 
      }

      else{   
        include('session-login.inc.php'); 
      }

      ?>
                   
      </header>
      <nav class="mainNav">
        <div class="row">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="search.php">PVE Events</a></li>
            <?php
             if(isset($_SESSION['login'])){   
        echo "<li><a href=\"account.php\">My Account</a></li>";
      }
         if(isset($_SESSION['login']) && $_SESSION["currentUser"] == "admin"){   
        echo "<li><a href=\"cms.php\">CMS</a></li>";
      }
            

            ?>
          
          </ul>
        </div>
      </nav>