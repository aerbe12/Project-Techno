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
      <!-- PROFILE IMAGE -->
      <div class="profile-image">
      <?php
     // Check if the user has a saved image path in a cookie
          if (isset($_COOKIE['image_'.$_SESSION['id_user']])) {
            $image = "uploads/" . $_COOKIE['image_'.$_SESSION['id_user']];
          } else {
            // Set default image path
            $image = "./img/avatar.svg";
          }

          if (isset($_POST['submit'])) {
            // Check if a file was uploaded successfully
            if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
              $tmp_name = $_FILES['image']['tmp_name'];
              $name = $_SESSION['id_user'] . ".jpg"; // use the user's ID as the filename
              $image = "./uploads/" . $name;
              // Move uploaded file to destination directory
              move_uploaded_file($tmp_name, $image);
              // Save the new image path in a cookie
              setcookie('image_'.$_SESSION['id_user'], $name, time() + (86400 * 30), "/"); // cookie expires in 30 days
            }
          }

          // Update $image with the saved image path from the cookie
          if (isset($_COOKIE['image_'.$_SESSION['id_user']])) {
            $image = "uploads/" . $_COOKIE['image_'.$_SESSION['id_user']];
          }
      
        ?>
    <img src="<?php echo $image ?>" alt="Your Profile Image" />
    <form class="photo-profile"action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
      <input  type="file" name="image" accept=".jpg,.jpeg,.png" />
      <button class="btn-submit" type="submit" name="submit">Upload</button>
    </form>
        </div>
        <!-- PROFILE IMAGE END -->

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
    