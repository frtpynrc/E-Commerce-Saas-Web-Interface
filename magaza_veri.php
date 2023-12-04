<!DOCTYPE html>
<html lang="tr">
<head>
  <title>Mağaza VT Tablosu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <ul>
    <li><a href="index.php">Ana Sayfaya Geri Dön</a></li>
    <li><a href="magaza.php">Mağaza Kayıt Ekranına Dön</a></li>
  </ul>

  <div class="container">
    <h2>Mağaza Veri Tablosu</h2>
    <p>Aşağıdaki tabloda veritabanında bulunan mağaza bilgileri yer almaktadır:</p>

    <table class="table">
      <thead>
        <tr>
          <td>Magaza_ID</td>
          <td>Isim</td>
          <td>Adres</td>
        </tr>
      </thead>

      <?php
      include("baglanti.php");
      $sec = "SELECT * FROM magaza";
      $sonuc = $baglan->query($sec);

      if ($sonuc->num_rows > 0) {
        while ($cek = $sonuc->fetch_assoc()) {
          echo "
          <tr>
            <td>".$cek['Magaza_ID']."</td>
            <td>".$cek['Isim']."</td>
            <td>".$cek['Adres']."</td>
          </tr>
          ";
        }
      } else {
        echo "Veritabanında veri bulunamadı";
      }
      ?>

    </table>
  </div>
</body>
</html>
