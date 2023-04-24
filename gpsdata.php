<?php 

require 'config.php';
$did =$_POST['did'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];


echo "<br>";
echo $did;
echo "<br>";
echo $lat;
echo "<br>";
echo $lng;




$sql = "INSERT INTO  jrc001(lat,lng) 
	VALUES('".$lat."','".$lng."')";

if($db->query($sql) === FALSE)
	{ echo "Error: " . $sql . "<br>" . $db->error; }

echo "<br>";
echo $db->insert_id;
