<?php
require("baglanti.php");

if ($baglan) {
    echo "Bağlantı yapıldı";

    // Check if the required POST variables are set
    if (isset($_POST["Magaza_ID"], $_POST["Isim"], $_POST["Adres"])) {
        // Sanitize and trim input data
        $Magaza_ID = htmlspecialchars(trim($_POST["Magaza_ID"]));
        $Isim = htmlspecialchars(trim($_POST["Isim"]));
        $Adres = htmlspecialchars(trim($_POST["Adres"]));

        // Use prepared statement to prevent SQL injection
        $query = "INSERT INTO magaza(Magaza_ID, Isim, Adres) VALUES (?, ?, ?)";
        $statement = mysqli_prepare($baglan, $query);

        // Bind parameters and execute the statement
        mysqli_stmt_bind_param($statement, "sss", $Magaza_ID, $Isim, $Adres);
        $result = mysqli_stmt_execute($statement);

        // Check if the query was successful
        if ($result) {
            echo "Kayıt Başarılı";
        } else {
            echo "Kayıt Başarısız: " . mysqli_error($baglan);
        }

        // Close the statement
        mysqli_stmt_close($statement);
    } else {
        echo "POST variables are not set correctly.";
    }

    // Close the connection
    mysqli_close($baglan);
} else {
    die("Bağlantı sağlanamadı");
}
?>
