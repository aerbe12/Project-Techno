<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/homepage.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Opti:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Homepage</title>
  </head>
  <body>
    <!-- NAVBAR -->
    <?php 
       // Check if the user is logged in
       session_start();
      include './Components/Navbar/navbar.php';
    ?>
      <!-- NAVBAR -->

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
            <div class="carousel-caption  d-md-block">
              <h1>Ciptakan pola hidup sehat</h1>
              <p>dan dapatkan tubuh impian anda!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption  d-md-block">
              <h1>Setiap gerakan olahraga</h1>
              <p>adalah langkah maju menuju tubuh impian yang sehat dan bugar!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/3.png" class="d-block w-100" alt="...">
            <div class="carousel-caption  d-md-block">
              <h1>Merancang Pola Hidup Sehat</h1>
              <p>untuk mencapai kehidupan yang lebih sehat!</p>
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
                US akan membantu mencarikan menu makanan untuk
                tubuh anda, konsultasi dengan ahli, dan latihan yang cocok.</p>
               <p>Daftar sekarang untuk mendapatkan free trial session!</p>
               <button id="btn-free"onclick = "redirectToFree()"> Daftar Sekarang! </button> 
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
            <button id="btn-healthy" onclick="redirectToHealthy()"> Detail </button>
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
            <button id="btn-basic" onclick="redirectToBasic()"> Detail </button>
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
              <button id="btn-bodygoals" onclick="redirectToBodyGoals()"> Detail </button>
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
              <p>Tidak hanya paket yang merogoh kocek,</br>
                US juga menyediakan tarif gratis yang dapat</br>
                menampilkan index kesehatan anda. </p>
               
            </div>

            <div class="col-4">
               <button class="btn-score"onclick="location.href='./indexKesehatan.php'">Ayo coba sekarang!</button>
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
          <a href="https://www.instagram.com/us.forhealthness/"><img src="img/instagram.svg" alt="Instagram"></a>
            <img src="img/tik-tok.svg" alt="">
            <img src="img/youtube.svg" alt="">
          <a href ="https://www.facebook.com/profile.php?id=100090547650440"><img  src="img/facebook.svg" alt=""></a>
         </div>

        </div>
      </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
      const redirectToFreeButton = document.querySelector('.btn-free');
      redirectToFreeButton.addEventListener('click', redirectToFree);
      const redirectToHealthyButton = document.querySelector('.btn-healthy');
      redirectToHealthyButton.addEventListener('click', redirectToHealthy);
      const redirectToBasicButton = document.querySelector('.btn-basic');
      redirectToBasicButton.addEventListener('click', redirectToBasic);
      const redirectToBodyGoalsButton = document.querySelector('.btn-bodygoals');
      redirectToBodyGoalsButton.addEventListener('click', redirectToBodyGoals);

      function isLoggedIn() {
        return <?php echo isset($_SESSION['id_user']) ? 'true' : 'false'; ?>;
      }

      function redirectToFree() {
        console.log("Button clicked!");
        if (isLoggedIn()) {
          location.href = "./freepayment.php";
        } else {
          location.href = "./login.php";
        }
      }

      function redirectToHealthy() {
        console.log("Button clicked!");
        if (isLoggedIn()) {
          location.href = "./healthylife.php";
        } else {
          location.href = "./login.php";
        }
      }

      function redirectToBasic() {
        console.log("Button clicked!");
        if (isLoggedIn()) {
          location.href = "./basic.php";
        } else {
          location.href = "./login.php";
        }
      }
      function redirectToBodyGoals() {
        console.log("Button clicked!");
        if (isLoggedIn()) {
          location.href = "./bodygoals.php";
        } else {
          location.href = "./login.php";
        }
      }
</script>
  </body>
</html>