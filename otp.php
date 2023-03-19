<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type ="text/css" href="css/otp.css">
    <title>OTP</title>
</head>
<body>
    <?php 
    include './Components/Navbar/navbar.php'
    ?>

    <div class="container">

    <div class="container-box">
        <div class="content">

            <div class="title">
                <h1>Kode OTP</h1>
            </div>
            <div class="subtitle">
                <p>Silahkan masukkan kode OTP </br>yang telah dikirimkan oleh pihak US</p></div>
                <form action="">
                    <input class="input-otp"type="text"/>
                    <input type="submit" class="btn" value="submit" name="submit" />
                </form>
            </div>
        </div>
    </div>
</body>
</html>