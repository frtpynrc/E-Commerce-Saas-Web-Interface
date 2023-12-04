<?php
// Include the connection file
require "baglanti.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>E-Ticaret Paneli</title>
  <!-- Link to your custom CSS file -->
  <link rel="stylesheet" type="text/css" href="css/newstyle.css">
  <!-- Bootstrap CSS link (commented out) -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
</head>
<body>
<div class="container">
    <div class="title">
        <!-- Heading and navigation links -->
        <h1>Online Ticaret Veri Giriş Arayüzü</h1>
        <img src="images/anasayfa2">
        <ul>
          <li><a href="hakkinda.php">Sayfa Hakkında</a></li>
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="musteri.php">Müşteri</a></li>
          <li><a href="kurye.php">Kurye</a></li>
          <li><a href="magaza.php">Mağaza</a></li>
      </ul>       
    </div>  
</div>
<div class="form">
    <!-- Form for adding products -->
    <p>Haftanın Fırsat Ürünleri:</p>
    <form action="javascript:void(0);" method="POST" onsubmit="app.Add()"> 
        <input type="text" id="add-todo" placeholder="Ürün Adı">
        <input type="submit" value="Ekle" class="btn btn-primary">
    </form>
    <p>Güncel Liste: </p>
    <p id="counter"></p>
    <!-- Table for displaying product information -->
    <table>
        <tr class="to-do">
            <th><h3>En Çok Tercih Edilen Ürünler</h3></th>
        </tr>
        <tbody id="tasks"></tbody>
    </table>
</div>
<div id="edit-box" role="aria-hidden">
    <!-- Form for editing product information -->
    <form action="javascript:void(0);" method="POST" id="save-edit">
      <input type="text" id="edit-todo">
      <input type="submit" value="Kayıt" class="btn btn-success"/> <a onclick="CloseInput()" aria-label="Close">&#10006;</a>
    </form>
</div> 
<script src="script.js"></script>
</body>
</html>
