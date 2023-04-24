
<?php
// MySQL database credentials
$host = 'localhost';
$username = 'captaine_neamatullah';
$password = 'XAIRAMUNA@222';
$dbname = 'captaine_JRC';

// Connect to the database
$conn = new mysqli($host, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Retrieve data from the table
$sql = 'SELECT value FROM sensor';
$result = $conn->query($sql);

// Check for query errors
if (!$result) {
    die('Query failed: ' . $conn->error);
}

// Convert result set to an array
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row['value'];
}

// Close the connection
$conn->close();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Gauge visualization</title>
    <meta http-equiv="refresh" content="2">
    <style>
        .center {
  margin: auto;
  width: 50%;
  border: 3px solid green;
  padding: 10px;
}
    </style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['gauge']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Label', 'Value'],
                ['Value', <?php echo $data[0]; ?>]
            ]);

            var options = {
                width: 800, height: 520,
                redFrom: 90, redTo: 100,
                yellowFrom:75, yellowTo: 90,
                minorTicks: 5
            };

            var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <div id="chart_div" class="center"></div>
</body>
</html>
