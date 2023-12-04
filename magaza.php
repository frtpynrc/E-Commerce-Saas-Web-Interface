<!DOCTYPE html>
<html lang="tr">
<head>
    <!-- Set the character set to UTF-8 for proper encoding -->
    <meta charset="UTF-8">

    <!-- Meta tags for description and keywords (SEO) -->
    <meta name="Description" content="Magaza">
    <meta name="Keywords" content="Magaza, Ekleme">

    <!-- Link to the external CSS stylesheet -->
    <link href="css/style.css" type="text/css" rel="stylesheet">

    <!-- Link to Bootstrap CSS for styling -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <!-- Container for the title and navigation -->
    <div class="title">
        <!-- Image for the title -->
        <img src="images/magaza">

        <!-- Unordered list for navigation links -->
        <ul>
            <!-- Link to return to the main page -->
            <li><a href="index.php">Ana Sayfaya Geri Dön</a></li>

            <!-- Link to view the saved Magaza table -->
            <li><a href="magaza_veri.php">Kaydedilen Mağaza Tablosuna Git</a></li>  
        </ul>
    </div>

    <!-- Container for the form -->
    <div class="container">
        <!-- Form for adding a new Magaza entry -->
        <form class="form-signin" action="magaza_ekle.php" method="POST">
            <!-- Form title -->
            <h2>Mağaza ekleme</h2>

            <!-- Input field for Magaza ID -->
            <p>Mağaza ID:</p>
            <input type="text" name="Magaza_ID" class="form-control">

            <!-- Input field for Magaza Name -->
            <p>İsim:</p>
            <input type="text" name="Isim" class="form-control">

            <!-- Input field for Magaza Address -->
            <p>Adres:</p>
            <input type="text" name="Adres" class="form-control">

            <!-- Submit button for form submission -->
            <input type="submit" class="btn btn-lg btn-primary btn-block">
        </form>
    </div>
</body>
</html>
