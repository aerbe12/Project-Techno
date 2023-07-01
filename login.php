

<!DOCTYPE html>
<html>
  <head>
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="css/login.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="icon" type="image/x-icon" href="./img/logo.png">
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
          <a href="SignUp.php">Register</a>
          <input type="submit" name ="submit"class="btn" value="Login" />
        </form>
      </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
    <script>
    // Get the login form
    const form = document.querySelector('form');
    
</script>
  </body>
</html>
