<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="Description" content="Musteri">
    <meta name="Keywords" content="Musteri,Ekleme">
    <!-- Link to your custom CSS file -->
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="title">
        <!-- Image related to the 'musteri' -->
        <img src="images/musteri">
        <ul>
            <!-- Navigation links -->
            <li><a href="index.php">Ana Sayfaya Geri Dön</a></li>
            <li><a href="musteri_veri.php">Kaydedilen Müşteri Tablosuna Git</a></li>
            <li><a href="tablo.php">Müşteri Cinsiyet Dağılım Grafiği</a></li>
            <li><a href="tablo2.php">Günlük Sipariş Tutarı Grafiği</a></li>
            <li><a href="line.php">Siparis No vs Fiyat Grafiği</a></li>
        </ul>
    </div>
    <div class="container">
        <!-- Form for adding a new customer -->
        <form class="form-signin" action="musteri_ekle.php" method="POST">
            <h2>Müşteri ekleme</h2>
            <!-- Input fields for customer information -->
            <p>Müşteri ID:</p>
            <input type="Musteri_ID" name="Musteri_ID" class="form-control">
            <p>Adı:</p>
            <input type="Ad" name="Ad" class="form-control">
            <p>Soyadı:</p>
            <input type="Soyad" name="Soyad" class="form-control">
            <p>Doğum Tarihi:</p>
            <input type="Dogum_Tarihi" name="Dogum_Tarihi" class="form-control">
            <p>Cinsiyeti (Kadın için 1, Erkek için 2 girilmelidir):</p>
            <input type="Cinsiyet_ID" name="Cinsiyet_ID" class="form-control">
            <p>Adres:</p>
            <input type="Adres" name="Adres" class="form-control">
            <!-- Submit button -->
            <input type="submit" class="btn btn-lg btn-primary btn-block">
        </form>
    </div>
</body>
</html>
