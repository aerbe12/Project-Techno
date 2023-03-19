<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/freepayment.css">
    <title>Free Payment</title>
  </head>
  <body>

    <?php 
    include './Components/Navbar/navbar.php'
    ?>
    <div class="container">
      <div class="title">
        <h1>Pendataan </br>Free Trial</h1>
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
        <p>Dengan mengisi data ini maka anda akan menyetujui dan akan menjalani program sesuai arahan ahli</p>
      </div>
        <button onclick ="redirectToInvoice()" class="btn-submit">Submit</button>
    </div>

  </body>
</html>
<script type="text/javascript" src="js/main.js"></script>
    
    <script>
      function redirectToInvoice() {
      // Prevent the default behavior of the button
      event.preventDefault();
      // Redirect the user to the sign-in page
      window.location.href = "freeinvoice.php";
      }

    </script>
