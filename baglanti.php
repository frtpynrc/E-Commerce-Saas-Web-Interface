<?php
// Include the file with database connection details
require("keys.php");

// Establish a connection to the MySQL database
$baglan = mysqli_connect($makine, $kullanici_adi, $sifre, $vt);

// Check if the connection is successful
if ($baglan) {
    // Set the character set to utf8_turkish_ci for proper handling of Turkish characters
    mysqli_query($baglan, "SET CHARACTER SET utf8_turkish_ci");
    // You can perform additional database-related operations here
    // For example, executing queries or other tasks using this database connection
}
?>
