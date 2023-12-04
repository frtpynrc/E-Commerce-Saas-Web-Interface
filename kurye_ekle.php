<?php
require("baglanti.php");

if ($baglan) {
    echo "Bağlantı yapıldı";

    // Check if the necessary POST parameters are set
    if ($_POST["Kurye_ID"]) {
        $Kurye_ID = htmlspecialchars(trim($_POST["Kurye_ID"]));
    }
    if ($_POST["Ad"]) {
        $Ad = htmlspecialchars(trim($_POST["Ad"]));
    }
    if ($_POST["Soyad"]) {
        $Soyad = htmlspecialchars(trim($_POST["Soyad"]));
    }
    if ($_POST["Cinsiyet_ID"]) {
        $Cinsiyet_ID = htmlspecialchars(trim($_POST["Cinsiyet_ID"]));
    }

    // Display all errors, warnings, and notices
    echo(mysqli_report(MYSQLI_REPORT_ALL));

    // Perform the SQL query to insert data
    $sorgu = mysqli_query($baglan, "INSERT INTO kurye(Kurye_ID,Ad,Soyad,Cinsiyet_ID) VALUES ('".$Kurye_ID."','".$Ad."','".$Soyad."','".$Cinsiyet_ID."')");

    // Check if the query was successful
    if ($sorgu === TRUE) {
        echo "Kayıt Başarılı";
    }

    // Close the database connection
    mysqli_close($baglan);
} else {
    die("Bağlantı sağlanamadı");
}
?>
