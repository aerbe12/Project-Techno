<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bodygoals.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  
    <title>Body Goals</title>
</head>
<body>
<?php
        include './Components/Navbar/navbar.php'
    ?>
<div class="container">
        <div class="content">
            <img src="img/treadmill 1.svg" alt="">
            <div class="content-title">
                <p><b>Konsultasi dengan ahli gizi</b> pada awal dan akhir bulan</br>
                    <b>Makanan sehat</b>sesuai dengan rekomendasi selama</br>
                        <b>20 hari sebanyak 2 kali</b></br>
                    <b>Tiket sport center</b> dengan trainer sebanyak 20 hari.</br>
                        Total biaya untuk <b>paket body goals</b> adalah </br>
                                            <b>Rp 3.699.000</b>
                </p>
            </div>
            <div class="content-subtitle">
                <p> <b>Pengguna baru? <a href="#">dapatkan free trial sekarang juga!</a> </b></p>
            </div>
            <hr>
        </div>
        <div class="content-form">
            <p>Lengkapi data diri anda pada kolom berikut untuk memesan paket ini</p>
            <div class="client-form">
                <h4>Tentang client</h4>
                <form id="form1" action="basicprocess.php">
                    <input type="text" placeholder="Apakah anda alergi terhadap makanan tertentu?">
                    <input type="text" placeholder="Apakah anda memiliki riwayat penyakit tertentu?">
                    <input type="text" placeholder="Apakah anda memiliki olahraga khusus yang anda gemari?">
                </form>
            </div>
            <div class="doctor-form">
                <h4>Tentang dokter</h4>
                <form id="form2">
                    <p class="consultation-type">Ingin melakukan konsultasi offline atau online?
                        <select class="consultation-type" name="consultation-type">
                        <option value="offline">Offline</option>
                        <option value="online">Online</option>
                    </select>
                    </p>
                    <p class="consultation-place">Ingin melakukan konsultasi di rumah sakit mana?
                        <select class="consultation-place" name="consultation-place">
                        <option value="Denpasar">Denpasar</option>
                        <option value="Tabanan">Tabanan</option>
                    </select>
                    </p>
                </form>

            </div>
             <p>Jika memilih online, kolom ini dapat di kosongkan. Pihak US akan menghubungi anda untuk info selanjutnya</p>
            <div class="fitness-form">
                <h4>Tentang tempat kebugaran</h4>
                <form id="form3" action="basicprocess.php">
                    <input type="text" placeholder="Ingin melakukan olahraga di tempat kebugaran mana?">
                </form>
            </div>
        </div>
        <div class="btn">
                <p>Paket ini sudah termasuk pelatihan, komunitas, dan workshop.
                    </br>untuk lebih lengkapnya, silahkan <a href="#">cek disini</a>
                </p>
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