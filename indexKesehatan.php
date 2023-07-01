<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/indexkesehatan.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./img/logo.png">
    <title>Index Kesehatan</title>
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
                Perhitungan index kesehatan
            </h1>
        </div>
        <div class="subtitle">
            <p>
            Silahkan isi kuisioner ini dengan data yang valid
           </p>
        </div>

        <div class="content">
            <form action="./IndexScore.php" method="POST" onsubmit="return validateForm();" >
            <div class="card">
                <p>1. Apakah anda sudah menerapkan pola hidup sehat?</p>
                <input type="radio" id="answer1-ya" name="answer1" value="1">
                <label for="answer1-ya">Ya, Sudah</label><br>
                <input type="radio" id="answer1-tidak" name="answer1" value="0">
                <label for="answer1-tidak">Belum</label><br>
            </div>

            <div class="card">
                <p>2. Seberapa sering anda berolahraga?</p>
                <input type="radio" id="answer2-sering" name="answer2" value="1">
                <label for="answer2-sering">Sering</label><br>
                <input type="radio" id="answer2-tidak" name="answer2" value="0">
                <label for="answer2-tidak">Tidak pernah</label><br>
            </div>

            <div class="card">
                <p>3. Seberapa sering berolahraga dalam seminggu?</p>
                <input type="radio" id="answer3-kali2" name="answer3" value="0">
                <label for="answer3-kali2">0-2 kali</label><br>
                <input type="radio" id="answer3-kali3-4" name="answer3" value="1">
                <label for="answer3-kali3-4">3-4 kali</label><br>
            </div>

            <div class="card">
                <p>4. Apakah anda telah mengkonsumsi makanan sehat?</p>
                <input type="radio" id="answer4-ya" name="answer4" value="1">
                <label for="answer4-ya">Ya</label><br>
                <input type="radio" id="answer4-tidak" name="answer4" value="0">
                <label for="answer4-tidak">Tidak</label><br>
            </div>

            <div class="card">
                <p>5. Apakah anda sering konsultasi dengan ahli gizi?</p>
                <input type="radio" id="answer5-sering" name="answer5" value="1">
                <label for="answer5-sering">Sering</label><br>
                <input type="radio" id="answer5-tidak" name="answer5" value="0">
                <label for="answer5-tidak">Tidak Pernah</label><br>
            </div>

            <button class="btn-submit" type="submit">Submit</button>
                
            </form>
        </div>
    </div>

</body>
<script>
        function validateForm() {
            var questions = document.getElementsByClassName('card');
            
            for (var i = 0; i < questions.length; i++) {
                var radios = questions[i].getElementsByTagName('input');
                var answered = false;
                
                for (var j = 0; j < radios.length; j++) {
                    if (radios[j].type === 'radio' && radios[j].checked) {
                        answered = true;
                        break;
                    }
                }

                if (!answered) {
                    alert('Tolong isi semua pertanyaan');
                    return false;
                }
            }
        }
    </script>
</html>