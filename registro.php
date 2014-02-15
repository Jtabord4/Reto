<?php
	
	include 'connect.php';
	
		$myemail = $_GET['email'];
		$myusername = $_GET['user'];
		$mypassword = $_GET['pass'];
		
		$query = "INSERT INTO `miembros` (`id`, `username`, `password`, `email`) VALUES ('', '$myusername', '$mypassword', '$myemail')";
		$result = mysql_query($query);
		$count = mysql_affected_rows($result);
		mysql_close();

		if($count == 1){
		echo "exito([" . json_encode(mysql_fetch_assoc($result)) . "])";
	
	}
		

		// if ($query) {
  //   		echo 'Affected rows: ' . mysql_affected_rows();
		// } else {
  //   		echo 'Fail: ' . mysql_error();
		// }
		



	
?>