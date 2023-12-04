<?php
// Include the connection file
require("baglanti.php");

// Check if the connection is successful
if($baglan){
    // Display a message indicating successful connection
    echo "Bağlantı yapıldı";

    // Check if Musteri_ID is provided through POST
    if($_POST["Musteri_ID"]){
        // Sanitize and trim Musteri_ID
        $Musteri_ID = htmlspecialchars(trim($_POST["Musteri_ID"]));
    }

    // Check if Ad is provided through POST
    if($_POST["Ad"]){
        // Sanitize and trim Ad
        $Ad = htmlspecialchars(trim($_POST["Ad"]));
    }

    // Check if Soyad is provided through POST
    if($_POST["Soyad"]){
        // Sanitize and trim Soyad
        $Soyad = htmlspecialchars(trim($_POST["Soyad"]));  
    }

    // Check if Dogum_Tarihi is provided through POST
    if($_POST["Dogum_Tarihi"]){
        // Sanitize and trim Dogum_Tarihi
        $Dogum_Tarihi = htmlspecialchars(trim($_POST["Dogum_Tarihi"])); 
    }

    // Check if Cinsiyet_ID is provided through POST
    if($_POST["Cinsiyet_ID"]){
        // Sanitize and trim Cinsiyet_ID
        $Cinsiyet_ID = htmlspecialchars(trim($_POST["Cinsiyet_ID"])); 
    }

    // Check if Adres is provided through POST
    if($_POST["Adres"]){
        // Sanitize and trim Adres
        $Adres = htmlspecialchars(trim($_POST["Adres"]));
    }

    // Display all MySQLi errors
    echo(mysqli_report(MYSQLI_REPORT_ALL));

    // Execute the query to insert data into the musteri table
    $sorgu = mysqli_query($baglan, "INSERT INTO musteri(Musteri_ID, Ad, Soyad, Dogum_Tarihi, Cinsiyet_ID, Adres) VALUES ('".$Musteri_ID."','".$Ad."','".$Soyad."','".$Dogum_Tarihi."','".$Cinsiyet_ID."','".$Adres."')");

    // Check if the query was successful
    if($sorgu === TRUE){
        // Display a success message
        echo "Kayıt Başarılı";
    }

    // Close the database connection
    mysqli_close($baglan);
} else {
    // Display an error message if the connection is not successful
    die("bağlantı sağlanmadı");
}
?>
