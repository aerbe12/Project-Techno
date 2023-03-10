<?php
 include "./Components/SignUp/process_signup.php";
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="css/SignUp.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>
  <body>

    <div class="container">
      <div class="img">
      <img  src="./img/signup-avatar.png"/>
      </div>
      <div class="login-content">
        <form action="./Components/SignUp/process_signup.php" method="POST">
          <img src="img/avatar.svg" />
          <h3 class="title">Isi data diri Anda</h3>
          <div class="input-div one">
            <div class="i">
              <i class="fas fa-user"></i>
            </div>
            <div class="div">
              <h5>Nama</h5>
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
          
          <div class="input-div age">
            <div class="i">
              <i class="fas fa-lock"></i>
            </div>
            <div class="div">
              <h5>Umur</h5>
              <input type="number" name="age" class="input" />
            </div>
          </div>

          <div class="input-div email">
            <div class="i">
              <i class="fas fa-lock"></i>
            </div>
            <div class="div">
              <h5>Email</h5>
              <input type="text" name="email" class="input" />
            </div>
          </div>

          <input type="submit" class="btn" value="Sign Up" name="submit" />

          <div class="login-message">
            <h2 class="title">WELCOME! <BR></h2>
            <span>If you already have an account, <br>  </span>
            <span>please login with your personal information</span>
            <br>
            <button onclick="redirectToSignInPage()" class="btn-signin">Sign In</button>
          </div>
        </form>
      </div>
     
    </div>
    <script type="text/javascript" src="js/main.js"></script>
    
    <script>
      function redirectToSignInPage() {
      // Prevent the default behavior of the button
      event.preventDefault();
      // Redirect the user to the sign-in page
      window.location.href = "login.php";
      }

    </script>
  </body>
</html>

