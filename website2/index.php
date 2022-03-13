<?php 
include('conn.inc.php');
include('functions.inc.php');

session_start();

 ?> 

<!DOCTYPE html>
    <?php
    include('navbar.php');
    ?>
      <div class="mainContent">
        <main>
          <div class="mainheading">
            <h1>
              Welcome to my World of Warcraft event planner<br /><span id="viewPortData"></span>
            </h1>
          </div>
          <div class="strapline">
<!--             <div class="straplineImg">
              <img src="images/World-of-Warcraft-Logo.jpg" alt="HTML5, CSS3, JS Logos" />
            </div>
 -->            <div class="straplinetxt">
              <p>
               Here you can add and manage events that are happening in game.
              </p>
              
          </div>
        </main>
        <div class="sideBar">
          <h3>Make Sure to create an account!!</h3>
          <ul>
            <li>Create an account and see your account details</li>
          </ul>
        </div>
      </div>
       <?php 
  include("footer.php");

  ?>
    </div>
    <!-- Javascript links here -->
     <script src="jquery-3.4.1.min.js"></script>     
     <script src="main.js"></script>
  </body>
</html>