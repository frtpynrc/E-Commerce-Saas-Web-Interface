<!DOCTYPE html>
<html lang="tr">
<head>
  <title>Müşteri VT Tablosu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Bootstrap JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<ul>
    <!-- Navigation links -->
    <li><a href="index.php">Ana Sayfaya Geri Dön</a></li>
    <li><a href="musteri.php">Müşteri Kayıt Ekranına Dön</a></li>
</ul>
<div class="container">
  <!-- Table heading and description -->
  <h2>Müşteri Veri Tablosu</h2>
  <p>Aşağıdaki tabloda veritabanında bulunan müşteri bilgileri yer almaktadır:</p>            
  <!-- Displaying the table -->
  <table class="table">
    <thead>
      <!-- Table headers -->
      <tr>
        <td>Musteri_ID</td>
        <td>Ad</td>
        <td>Soyad</td>
        <td>Dogum_Tarihi</td>
        <td>Cinsiyet_ID</td>
        <td>Adres</td>
      </tr>
    </thead>
    <?php
    // Include the connection file
    include("baglanti.php");

    // SQL query to select data from the musteri table
    $sec = "Select * From musteri";

    // Execute the query
    $sonuc = $baglan->query($sec);

    // Check if there are rows in the result
    if ($sonuc->num_rows > 0) {
        // Loop through each row and display data in table rows
        while ($cek = $sonuc->fetch_assoc()) {
            echo "
            <tr>
            <td>".$cek['Musteri_ID']."</td>
            <td>".$cek['Ad']."</td>
            <td>".$cek['Soyad']."</td>
            <td>".$cek['Dogum_Tarihi']."</td>
            <td>".$cek['Cinsiyet_ID']."</td>
            <td>".$cek['Adres']."</td>
        </tr>
            ";
        }
    } else {
        // Display a message if there is no data in the table
        echo "Veritabanında veri bulunamadı";
    }
    ?>
  </table>
</div>
</body>
</html>
