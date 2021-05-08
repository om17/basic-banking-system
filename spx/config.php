<?php

	$servername = "localhost";
	$username = "om";
	$password = "mybrainno1";
	$dbname = "transactions";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>