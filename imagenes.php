<?php
	
	include 'connect.php';
	
	$query = "SELECT * FROM `imagenes` WHERE `username`='$myusername' and `password`='$mypassword'";
	while($ROW= mysql_fetch_array($query)){

	}	
	
?>