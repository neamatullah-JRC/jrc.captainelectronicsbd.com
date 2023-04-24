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

// Retrieve data from the POST request
$soilMoisture = $_POST['soil_moisture'];

// Insert data into the database
  $sql = "UPDATE sensor SET value = $soilMoisture WHERE id = '1'";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . $conn->error;
}

// Close the connection
$conn->close();
?>
