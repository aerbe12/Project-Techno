<?php 
include './Components/Login/loginsession.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" type="text/css" href="css/profile.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" 
    rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
  </head>
  <body>
    <!-- NAVBAR -->
   <?php 
    include "./Components/Navbar/navbar.php"
   ?>
    <!-- NAVBAR END -->

    <!-- PROFILE -->
    <div class="profile-container">
      <div class="profile-image">
        <img src="./img/profile.jpg" alt="Your Profile Image" />
      </div>
      <div class="profile-data-container">
        <div class="profile-data">
          <h2>Data diri pengguna</h2>
          <?php include './Components/Login/profiledata.php'?>
        </div>
      </div>
    </div>
    <!-- PROFILE END -->

    <!-- NO Transaction -->
 <?php include "./Components/Transaction/noTransaction.php" ?>
    <!-- NO Transaction END-->
  </body>
</html>
