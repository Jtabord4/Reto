<?php
	
	include 'connect.php';
	
	 // $myusername = stripslashes($myusername);
	 // $mypassword = stripslashes($mypassword);
	 // $myemail = stripcslashes($myemail);
	

	$myusername = $_GET['user'];
	$mypassword = $_GET['pass'];
	
	$query = "SELECT * FROM `miembros` WHERE `username`='$myusername' and `password`='$mypassword'";
	$result = mysql_query($query);
	$count = mysql_num_rows($result);

	mysql_close();

	if($count == 1){
		echo "exito([" . json_encode(mysql_fetch_assoc($result)) . "])";
	
	}
	
?>