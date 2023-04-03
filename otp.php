
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type ="text/css" href="css/otp.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   
    <title>OTP</title>
</head>
<body>

    <div class="container">

    <div class="container-box">
        <div class="content">

            <div class="title">
                <h1>Kode OTP</h1>
            </div>
            <div class="subtitle">
                <p>Silahkan masukkan kode OTP </br>yang telah dikirimkan oleh pihak US</p></div>
                <form action="./Components/Login/verify.php" method="POST">
                    <input class="input-otp" type="text" name="otp" />
                    <input type="submit" class="btn" value="submit" name="submit" />
                </form>
            </div>
        </div>
    </div>
</body>
</html>
