<?php
$hostName = "localhost";
$userName = "captaine_jrcadmin";
$password = "XAIRAMUNA@222";
$databaseName = "captaine_jrccar";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>