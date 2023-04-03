<?php
function calculateScore($answers) {
  $score = 0;
  
  foreach($answers as $answer) {
    $score += intval($answer);
  }

  if($score >= 4) {
    $category = "Sangat Baik";
    $description ="Tingkat kesehatan anda tergolong sangat baik. Dengan tingkat kesehatan seperti ini anda seharusnya
    dapat melakukan aktivitas dengan lancar dan sangat baik. Sistem imunitas tubuh anda juga pastinya 
    terjaga karena anda tergolong bugar secara jasmani. Namun tidak mustahil anda juga dapat terkena
    penyakit.";
    $advice = "Selamat atas tingkat kesehatan Anda yang sangat baik! Anda seharusnya dapat melakukan aktivitas sehari-hari 
    dengan mudah dan menjaga kebugaran fisik yang tinggi. Kemungkinan sistem kekebalan tubuh Anda juga dalam kondisi baik.
    Namun, penting untuk menjaga kebiasaan sehat agar tetap menikmati kesehatan yang baik. 
    Pastikan untuk berolahraga secara teratur, mengonsumsi makanan seimbang, dan menghindari kebiasaan yang tidak sehat. 
    Selain itu, Anda juga dapat mempertimbangkan untuk melakukan pemeriksaan kesehatan secara teratur untuk memastikan Anda tetap sehat.";
    $cssClass = 'score-sangat-baik';
  } elseif($score == 3) {
      $category = "Baik";
      $description = "Tingkat kesehatan anda tergolong baik. Anda seharusnya dapat melakukan aktivitas dengan lancar.
      Meskipun begitu, pastikan untuk menjaga pola hidup sehat agar terhindar dari penyakit.";
      $advice = "Tingkat kesehatan Anda baik, yang berarti Anda seharusnya dapat melakukan aktivitas sehari-hari tanpa kesulitan.
      Namun, Anda perlu terus menjaga gaya hidup sehat untuk menghindari masalah kesehatan di masa depan. 
      Anda dapat mempertimbangkan untuk menambahkan lebih banyak olahraga ke dalam rutinitas harian dan mengonsumsi makanan seimbang yang mencakup banyak buah dan sayuran.
      Penting juga untuk menghindari kebiasaan yang tidak sehat seperti merokok, minum terlalu banyak alkohol, dan mengonsumsi terlalu banyak makanan olahan.
      Dengan membuat perubahan gaya hidup sederhana ini, Anda dapat memastikan bahwa Anda terus menjaga kesehatan yang baik. ";
      $cssClass = 'score-baik';
  } elseif($score == 2) {
      $category = "Buruk";
      $description = "Tingkat kesehatan anda tergolong buruk. Anda mungkin merasa kesulitan dalam melakukan aktivitas.
      Pastikan untuk segera memperbaiki pola hidup dan memperhatikan kesehatan agar tidak semakin buruk.";
      $advice = "Tingkat kesehatan Anda tidak optimal, dan Anda mungkin mengalami kesulitan dalam melakukan aktivitas sehari-hari.
      Penting untuk segera mengambil tindakan untuk meningkatkan kesehatan Anda. Anda harus memulainya dengan membuat perubahan gaya hidup, 
      seperti meningkatkan aktivitas fisik dan mengonsumsi makanan sehat. Penting juga untuk berkonsultasi dengan dokter untuk melakukan pemeriksaan dan mengikuti rekomendasi mereka.
      Dengan melakukan perubahan ini, Anda dapat meningkatkan kesehatan Anda dan menghindari masalah kesehatan serius di masa depan.";
      $cssClass = 'score-buruk';
  } else {
      $category = "Sangat Buruk";
      $description = "Tingkat kesehatan anda tergolong sangat buruk. Anda mungkin mengalami kesulitan dalam melakukan
      aktivitas sehari-hari dan rentan terkena penyakit. Segera lakukan perubahan dalam pola hidup untuk memperbaiki
      kesehatan anda.";
      $advice = "Segera berkonsultasi dengan dokter dan lakukan perbaikan pola hidup dengan melakukan olahraga, makan makanan sehat, hindari kebiasaan buruk dan konsumsi vitamin.";
      $cssClass = 'score-sangat-buruk';
  }

  return array("score" => $score, "category" => $category, "description" => $description, "advice" => $advice, "cssClass" => $cssClass);
}
  
$answers = array($_POST['answer1'], $_POST['answer2'], $_POST['answer3'], $_POST['answer4'], $_POST['answer5']);
$result = calculateScore($answers);


?>