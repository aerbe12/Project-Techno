<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/healthylife.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./img/logo.png">
    <title>Healthy Life</title>
</head>
<body>
        <?php
           // Check if the user is logged in
             session_start();
            include './Components/Navbar/navbar.php'
        ?>
<div class="container">
        <div class="content">
            <img src="img/diet 1.svg" alt="">
            <div class="content-title">
                <p><b>Konsultasi dengan ahli gizi</b> pada awal dan akhir bulan.</br>
                    <b>Makanan sehat</b>  sesuai dengan rekomendasi selama </br>
                    <b>20 hari sebanyak 2 kali.</b></br>
                    Total biaya untuk <b>paket healthy life</b> adalah</br>
                    <b>Rp 1.999.000</b></p>
            </div>
            <div class="content-subtitle">
                <p> <b>Pengguna baru? <a href="#">dapatkan free trial sekarang juga!</a> </b></p>
            </div>
            <hr>
        </div>
        <div class="content-form">
            <p>Lengkapi data diri anda pada kolom berikut untuk memesan paket ini</p>
            <div class="client-form">
                <form id="form1" method="POST" action="./Components/packets/healthyLifeProcess.php">
                    <h4>Tentang client</h4>
                    <input type="text" name="alergi" placeholder="Apakah anda alergi terhadap makanan tertentu?">
                    <input type="text" name="penyakit" placeholder="Apakah anda memiliki riwayat penyakit tertentu?">
                    <input type="text" name="olahraga" placeholder="Apakah anda memiliki olahraga khusus yang anda gemari?">
                    <h4>Tentang Dokter</h4>
                    <p class="consultation-type">Ingin melakukan konsultasi offline atau online?
                        <select class="consultation-type" name="consultation_type">
                            <option value="offline">Offline</option>
                            <option value="online">Online</option>
                        </select>
                    </p>
                    <p class="consultation-place">Ingin melakukan konsultasi di rumah sakit mana?
                        <select class="consultation-place" name="consultation_place">
                            <option value="Denpasar">Denpasar</option>
                            <option value="Tabanan">Tabanan</option>
                        </select>
                    </p>
                </form>

             </div>
             <p>Jika memilih online, kolom ini dapat di kosongkan. Pihak US akan menghubungi anda untuk info selanjutnya</p>
            </div>
            <div class="btn">
                <p>Paket ini sudah termasuk pelatihan, komunitas, dan workshop.
</br>untuk lebih lengkapnya, silahkan <a href="#">cek disini</a></p>
                <button  class="btn-submit" id="submit">Submit</button>
        </div>
    </div>


</body>
</html>

<script>
    document.getElementById( 'submit' ).addEventListener( 'click', function () {
    // check for and report errors here
    for( var index = 0; index < document.forms.length; index++ ) {
        document.forms[index].submit();
    };
} );
</script>