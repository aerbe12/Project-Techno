

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/navbar.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap"
      rel="stylesheet"
    />
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <title>Navbar</title>
  </head>
  <body>
    <?php
          // Check if the current URL matches the specific page URL
          $specific_page_path = '../../landingPage.php';
          $current_page = basename($_SERVER['SCRIPT_FILENAME']);
          $user_on_specific_page = ($current_page === 'landingPage.php');
          // Generate the navbar HTML
          echo '<nav class="navbar">';
          echo '<div class="navbar-logo">';
          echo '<img src="./img/logo.png" alt="Your Logo" />';
          echo '</div>';
          echo '<div class="navbar-menu">';
          if ($user_on_specific_page) {
            // Display the avatar
            echo '<div class="navbar-avatar"><img src="./img/avatar.svg" alt="User Avatar" /></div>';
          } else {
            // Display the logout button
            echo '<form action="./Components/Logout/logout.php" method="post"><button type="submit" class="navbar-button" name="logout">Logout</button></form>';
          }
          echo '</div>';
          echo '</nav>';
          ?>
  </body>
  </html>
  
  <!-- NAVBAR -->
  <!-- <nav class="navbar">
    <div class="navbar-logo">
      <img src="./img/logo.png" alt="Your Logo" />
    </div>
    <div class="navbar-menu">
      <form action="./Components/Logout/logout.php" method="post">
        <button type="submit" class="navbar-button" name="logout">
          Logout
        </button>
      </form>
    </div>
  </nav> -->
  <!-- NAVBAR END -->