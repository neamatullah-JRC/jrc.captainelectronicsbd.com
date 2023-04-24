<?php
/* Database connection settings */
	$servername = "localhost";
    $username = "captaine_project001";		//put your phpmyadmin username.(default is "root")
    $password = "jrchackervau";			//if your phpmyadmin has a password put it here.(default is "root")
    $dbname = "captaine_biometricattendace";
    
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }
?>