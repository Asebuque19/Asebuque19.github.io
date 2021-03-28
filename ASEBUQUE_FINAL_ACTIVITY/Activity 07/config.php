<?php 
	$dbhost = 'localhost';
	$dbname = 'Database';
	$dbuser = 'root';
	$dbpass = '';

	$mysqli = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	$result = mysqli_query($mysqli, "SELECT * FROM Countries");
?>