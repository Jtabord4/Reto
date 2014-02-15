<?php
	
	include 'connect.php';
	// $myusername = stripslashes($myusername);
	// $mypassword = stripslashes($mypassword);
	// $myemail = stripcslashes($myemail);
	$servicio = $_GET['servicio'];

	if($servicio = 'login'){
		login();
	
	}else{
		registro();
	}

	function login(){

	$myusername = $_GET['user'];
	$mypassword = $_GET['pass'];
	$query = "SELECT * FROM `miembros` WHERE `username`='$myusername' and `password`='$mypassword'";
	$result = mysql_query($query);
	$count = mysql_num_rows($result);

	if($count == 1){
		echo "exito([" . json_encode(mysql_fetch_assoc($result)) . "])";
	}
	}

	function registro(){
		$myusername = $_GET['reguser'];
		$mypassword = $_GET['regpass'];
		$myemail = $_GET['regemail'];
		$query = "INSERT INTO `miembros` (`id`, `email`, `username`, `password`) VALUES (NULL, '$regemail', '$reguser', '$regpass')";
		$result = mysql_query($query);
		$count = mysql_affected_rows($result);
		if($count == 1){
		echo "exito([" . json_encode(mysql_fetch_assoc($result)) . "])";
	}
	}

	class potato{

	}

	mysql_close();

?>