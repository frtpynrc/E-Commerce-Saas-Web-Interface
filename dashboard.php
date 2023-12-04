<?php
// Include the file with the database connection details
require "baglanti.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>E-Ticaret Paneli</title>
  <link rel="stylesheet" type="text/css" href="css/newstyle.css">
  <!-- Uncomment the following line to include Bootstrap CSS from CDN -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
</head>
<body>
<div class="container">
    <div class="title">
        <!-- Display the title and logo -->
        <h1>Dashboard</h1>
        <img src="images/anasayfa2">
        <!-- Navigation menu -->
        <ul>
            <li><a href="index.php">Ana Sayfaya Geri Dön</a></li>
            <li><a href="tablo.php">Müşteri Cinsiyet Dağılım Grafiği</a></li>
            <li><a href="tablo2.php">Günlük Sipariş Tutarı Grafiği</a></li>
            <li><a href="line.php">Siparis No vs Fiyat Grafiği</a></li>
        </ul>       
    </div>
</div>
<!-- Include the JavaScript file -->
<script src="script.js"></script>
</body>
</html>
