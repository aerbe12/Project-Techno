<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/Transaction.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <title>noTransaction</title>
</head>
<body>
    <!-- Transaction -->
    <div class="transaction-container">
      <h2>Transaksi yang telah dilakukan</h2>
      <hr />
      <div class="transaction-tables">
        <div class="left-table">
            <table>
        <tr>
          <td>
            <h2>Paket yang diambil</h2>
            <h4><?php echo "Body Goals"; ?></h4>
          </td>
          <td>
            <h2>Tipe konsultasi</h2>
            <h4><?php echo "Offline"; ?></h4>
          </td>
          <td>
            <h2>Tempat Konsultasi</h2>
            <h4><?php echo "RS Bhakti Rahayu"; ?></h4>
          </td>
        </tr>
        <tr>
          <td>
            <h2>Tanggal berlaku</h2>
            <h4><?php echo "04-24-2023"; ?></h4>
          </td>
          <td>
            <h2>Tanggal kadaluarsa</h2>
            <h4><?php echo "04-24-2024"; ?></h4>
          </td>
          <td>
            <h2>Tanggal kebugaran</h2>
            <h4><?php echo "Tidak Ada"; ?></h4>
          </td>
        </tr>
        <tr>
          <td>
            <h2>Tanggal konsultasi</h2>
            <h4><?php echo "04-24-2023"; ?></h4>
          </td>
          <td>
            <h2>Hasil</h2>
            <h4><?php echo "akan di input dokter"; ?></h4>
          </td>
          <td>
            <h2>Saran</h2>
            <h4><?php echo "akan di input dokter"; ?></h4>
          </td>
        </tr>
      </table>
        </div>
        <div class="right-table">
            <table>
              <tr>
                <td ><h2>Tiket konsultasi</h2></td>
              </tr>
              <tr>
                <td  style="text-align: center;"><img src="./img/qrcode.png" alt="QR Code"></td>
              </tr>
              <tr>
                <td><h4>Silahkan tunjukkan QR ini saat konsultasi</h4></td>
              </tr>
            </table>
        </div>
      </div>
    </div>
    <!-- Transaction END-->
</body>
</html>