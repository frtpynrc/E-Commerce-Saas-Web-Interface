<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="Description" content="Kurye">
    <meta name="Keywords" content="Kurye,Ekleme">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="title">
        <img src="images/kurye">
        <ul>
            <li><a href="index.php">Ana Sayfaya Geri Dön</a></li>
            <li><a href="kurye_veri.php">Kaydedilen Kurye Tablosuna Git</a></li>
        </ul>
    </div>
    <div class="container">
        <form class="form-signin" action="kurye_ekle.php" method="POST">
            <h2>Kurye Ekleme</h2>
            <p>Kurye ID:</p>
            <input type="text" name="Kurye_ID" class="form-control">
            <p>Adı:</p>
            <input type="text" name="Ad" class="form-control">
            <p>Soyadı:</p>
            <input type="text" name="Soyad" class="form-control">
            <p>Cinsiyeti (Kadın için 1, Erkek için 2 girilmelidir):</p>
            <input type="text" name="Cinsiyet_ID" class="form-control">
            <input type="submit" class="btn btn-lg btn-primary btn-block">
        </form>
    </div>
</body>

</html>
