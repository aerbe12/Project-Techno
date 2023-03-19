<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/homepage.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Homepage</title>
  </head>
  <body>
    <!-- NAVBAR -->
    <?php
      include "./Components/Navbar/navbar.php"
    ?>
 <!-- slider -->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>Ciptakan pola hidup sehat</h1>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>Ciptakan pola hidup sehat</h1>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/3.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>Ciptakan pola hidup sehat</h1>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <section class="about">
        <div class="container">

          <div class="row">
            <div class="col-8 apakah">
              <h1>Apakah yang akan US lakukan?</h1>
              <p>Situs ini akan memberikan anda pengalaman terbaik untuk
                membantu mendapatkan badan impian dengan cara sehat.
                <b>US</b> akan membantu mencarikan <b>menu makanan untuk
                tubuh anda, konsultasi dengan ahli, dan latihan yang cocok.</b></p>
               <p>Daftar sekarang untuk mendapatkan <b>free trial</b> session!</p>
               <button> Daftar Sekarang! </button> 
            </div>

            <div class="col-4">
                <img src="img/se.svg" class="w-100" alt="">
            </div>

          </div>

        </div>
      </section>

    

    <section class="cardback">
      <h1>Apa yang dapat US tawarkan?</h1>
      <div class="bungkuscard">

      
      <div class="card">
        <div class="card-image"><img src="img/diet 1.svg" alt=""></div>
        <div class="card-text">
          
          <h2>Makanan Sehat</h2>
          <p>Tidak hanya konsultasi dengan ahli,
            anda juga akan mendapat
            makanan sehatnya..</p>
          <button> Detail </button>
        </div>
        <div class="card-stats">
          
        </div>
      </div>
      <div class="card">
        <div class="card-image card2"><img src="img/insurance 1.svg" alt=""></div>
        <div class="card-text card2">
          
          <h2>Basic</h2>
          <p>Dalam paket ini, anda akan
            mendapatkan waktu berharga
            untuk konsultasi dengan
            ahli gizi.</p>
          <button> Detail </button>
        </div>
        <div class="card-stats card2">
          
        </div>
      </div>
      <div class="card">
          <div class="card-image card3"><img src="img/treadmill 1.svg" alt=""></div>
          <div class="card-text card3">
            
            <h2>Body Goals</h2>
            <p>Tidak berhenti dengan
              konsultasi dan makanan sehat,
              anda juga dapat akses ke
              tempat pelatihan.</p>
            <button> Detail </button>
          </div>
          <div class="card-stats card3">
            
          </div>
        </div>
      </div>
    </section>



      <section class="free">
        <div class="container">

          <div class="row">
            <h1>Apakah anda sudah menerapkan hidup sehat?</h1>
            <div class="col-8 apakah">
              <p>Tidak hanya paket yang merogoh kocek,
                US juga menyediakan tarif gratis </br>yang dapat
                menampilkan index kesehatan anda. </p>
               
            </div>

            <div class="col-4">
               <button>Ayo coba sekarang!</button>
            </div>

          </div>

        </div>
      </section>

      <section class="footer">
        <div class="container">

          <div class="row">
            <h1>Jangan lupa untuk kepo-in <br>
              sosial media US ya!</h1>
            
            </div>

         <div class="row">
 
          <div class="icon">
            <img src="img/instagram.svg" alt="">
            <img src="img/tik-tok.svg" alt="">
            <img src="img/youtube.svg" alt="">
            <img src="img/facebook.svg" alt="">
         </div>

        </div>
      </section>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>