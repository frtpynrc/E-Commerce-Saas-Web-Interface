<?php
$con = mysqli_connect("localhost", "root", "", "proje");
if ($con) {
    echo "connected";
}
?>
<!DOCTYPE html>
<html>

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>

<body>
    <ul>
        <li><a href="index.php">Ana Sayfaya Geri Dön</a></li>
    </ul>
    <h3>Siparis No vs Siparis Tutarları</h3>
    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
    <script>
        var xValues = [
            <?php
            $sql = "SELECT * FROM siparis";
            $fire = mysqli_query($con, $sql);
            while ($result = mysqli_fetch_assoc($fire)) {
                echo "['" . $result['Siparis_No'] . "'],";
            }
            ?>
        ];
        var yValues = [<?php
            $sql = "SELECT * FROM siparis";
            $fire = mysqli_query($con, $sql);
            while ($result = mysqli_fetch_assoc($fire)) {
                echo "['" . $result['Fiyat'] . "'],";
            }
            ?>];
        new Chart("myChart", {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                    fill: false,
                    lineTension: 0,
                    backgroundColor: "rgba(0,0,255,1.0)",
                    borderColor: "rgba(0,0,255,0.1)",
                    data: yValues
                }]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            min: 50,
                            max: 700
                        }
                    }],
                }
            }
        });
    </script>
</body>

</html>
