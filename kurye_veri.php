<!DOCTYPE html>
<html lang="tr">

<head>
    <title>Kurye VT Tablosu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <ul>
        <li><a href="index.php">Ana Sayfaya Geri Dön</a></li>
        <li><a href="kurye.php">Kurye Kayıt Ekranına Dön</a></li>
    </ul>
    <div class="container">
        <h2>Kurye Veri Tablosu</h2>
        <p>Aşağıdaki tabloda veritabanında bulunan kurye bilgileri yer almaktadır:</p>
        <table class="table">
            <thead>
                <tr>
                    <td>Kurye_ID</td>
                    <td>Ad</td>
                    <td>Soyad</td>
                    <td>Cinsiyet_ID</td>
                </tr>
            </thead>
            <?php
            include("baglanti.php");
            $sec = "Select * From kurye";
            $sonuc = $baglan->query($sec);
            if ($sonuc->num_rows > 0) {
                while ($cek = $sonuc->fetch_assoc()) {
                    echo "
                    <tr>
                    <td>" . $cek['Kurye_ID'] . "</td>
                    <td>" . $cek['Ad'] . "</td>
                    <td>" . $cek['Soyad'] . "</td>
                    <td>" . $cek['Cinsiyet_ID'] . "</td>
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
