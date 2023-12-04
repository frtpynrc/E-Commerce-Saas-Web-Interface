<?php
  // Establishing a connection to the database
  $con = mysqli_connect("localhost","root","","proje");
  
  // Check if the connection is successful
  if($con){
    echo "connected";
  }
?>

<html>
  <ul>
    <li><a href="index.php">Ana Sayfaya Geri Dön</a></li>
  </ul>
  <head>
    <!-- Include Google Charts loader -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      // Load the visualization library
      google.charts.load('current', {'packages':['corechart']});
      
      // Set a callback function to run when the Google Visualization API is loaded
      google.charts.setOnLoadCallback(drawChart);
      
      // Callback function to draw the chart
      function drawChart() {
        // Create a data table from PHP data
        var data = google.visualization.arrayToDataTable([
          ['students', 'contribution'],
          <?php
            // Fetch data from the database
            $sql = "SELECT * FROM musteri_cinsiyet_sayilari";
            $fire = mysqli_query($con,$sql);
            
            // Loop through the data and create JavaScript array entries
            while ($result = mysqli_fetch_assoc($fire)) {
              echo"['".$result['Cinsiyet']."',".$result['Musteri_Cinsiyet_Sayisi']."],";
            }
          ?>
        ]);

        // Set chart options
        var options = {
          title: 'Müşteri Cinsiyet Dağılımı'
        };

        // Create a new PieChart and draw it in the 'piechart' div
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <!-- Display the PieChart in a div with id 'piechart' -->
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
