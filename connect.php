<?php
	
	$username = "root";
	$password = "mwtDRC89";
	$hostname = "localhost";
	
	$conexion = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
	$selected = mysql_select_db("pruebadb", $conexion);
	
?>