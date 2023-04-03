<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/freepayment.css">
    <title>Invoice free trial</title>
  </head>
  <body>

    <?php 
       // Check if the user is logged in
       session_start();
    include './Components/Navbar/navbar.php'
    ?>
    <div class="container">
      <div class="title">
        <h1>Invoice</br>Free Trial</h1>
        <hr>
    </div>
    
    <div class="content">
        <div class="content-item">
            <h3>Paket yang diambil adalah</h3>
            <p>Free Trial</p>
        </div>
        <div class="content-item">
            <h3>Dengan jumlah yang harus dibayar sebesar</h3>
            <p> Rp 0 </p>
        </div>
        <div class="content-item">
            <h3>Paket ini akan di jalani selama</h3>
            <p>1 Minggu </p>
        </div>
        <p>Free trial ini hanya dapat dilakukan sekali pada pengguna baru, silahkan periksa kembali</p>
        
      </div>
        <button class="btn-submit">Submit</button>
    </div>

  </body>
</html>
