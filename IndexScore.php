<?php
include './Components/indexCalculate/calculate.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/indexscore.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   
    <title>Index Score</title>
</head>
<body>
    <?php
       // Check if the user is logged in
       session_start();
        include './Components/Navbar/navbar.php'
    ?>
 <div class="container">
        <div class="title"> 
            <h1>
                Hasil index kesehatan
            </h1>
        </div>
        <div class="subtitle">
            <p>
            Berikut adalah hasil dari kuisioner yang telah anda isi sebelumnya
           </p>
        </div>
        <hr>
    <div class="content-container">

        <div class="<?php echo $result['cssClass']; ?>">
            <?php echo $result['category']; ?>
        </div>
        
        <div class="description">
            <?php echo $result['description']; ?>
        </div>
        
        <div class="advice">
            <h3>Saran</h3>
            <?php echo $result['advice']; ?>
        </div>
    </div>

    <button onclick="location.href='./index.php'" class="btn-offer">Lihat Penawaran</button>
 </div>

</body>
</html>