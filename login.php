<?php
 include "./Components/Login/process_login.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="css/login.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>
  <body>
    <img class="wave" src="img/wave.png" />
    <div class="container">
      <div class="img">
        <img src="img/yoi.svg" />
      </div>
      <div class="login-content">
        <form action="./Components/Login/process_login.php" method="POST">
          <img src="img/avatar.svg" />
          <h2 class="title">Welcome</h2>
          <div class="input-div one">
            <div class="i">
              <i class="fas fa-user"></i>
            </div>
            <div class="div">
              <h5>Username</h5>
              <input type="text" name="username" class="input" />
            </div>
          </div>
          <div class="input-div pass">
            <div class="i">
              <i class="fas fa-lock"></i>
            </div>
            <div class="div">
              <h5>Password</h5>
              <input type="password" name="password" class="input" />
            </div>
          </div>
          <a href="">Forgot Password?</a>
          <input type="submit" name ="submit"class="btn" value="Login" />
        </form>
      </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
    <script>
    // Get the login form
    const form = document.querySelector('form');
    
    // Listen for the form submit event
    form.addEventListener('submit', function(event) {
        // Prevent the form from submitting
        event.preventDefault();
        
        // Display an alert message
        alert('Please enter your username and password.');
    });
</script>
  </body>
</html>
