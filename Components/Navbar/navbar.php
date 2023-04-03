<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/navbar.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <title>Navbar</title>
  </head>
  <body>
  <?php
    
      
    $user_is_logged_in = isset($_SESSION['id_user']);
    // Generate the navbar HTML
    echo '<nav class="navbar">';
    echo '<div class="navbar-logo">';
    echo '<a href="./index.php"><img src="./img/logo.png" alt="Your Logo" /> </a>';
    echo '</div>';
    echo '<div class="navbar-menu">';
    if (!$user_is_logged_in) {
      // Display the login button
      echo '<a href="./login.php" class="navbar-button">Login</a>';
    } else {
      if (strpos($_SERVER['REQUEST_URI'], 'profile.php') !== false) {
        // If on the profile page, display the logout button only
        echo '<form action="./Components/Logout/logout.php" method="post"><button type="submit" class="navbar-button" name="logout">Logout</button></form>';
      } else {
        // Display the avatar
        echo '<div class="navbar-avatar">
              <a href="./profile.php">
              <img src="./img/user 1.svg" alt="User Avatar" />
              </a>
              </div>';
      }
    }
    echo '</div>';
    echo '</nav>';
  ?>


</body>
</html>

