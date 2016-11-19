<?php
	
	$ssid="root";
	$db_pass="adminpanel";
	$server="localhost";
	$db="db";

	$conn=mysqli_connect($server,$ssid,$db_pass,$db);
	if (!$conn) {
		die("Connection Failed");
	}
	else
	{
		echo "Conection Success";
	}

	include 'disconn.php';
	

?>