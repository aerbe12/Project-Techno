<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" type="text/css" href="css/profile.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap"
      rel="stylesheet"
    />
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
          <p>Nama</p>
          <p>Address: Your Address</p>
          <p>Age: Your Age</p>
          <p>Sex: Your Sex</p>
          <p>Email: you@example.com</p>
        </div>
      </div>
    </div>
    <!-- PROFILE END -->

    <!-- NO Transaction -->
 <?php include "./Components/Transaction/noTransaction.php" ?>
    <!-- NO Transaction END-->
  </body>
</html>
