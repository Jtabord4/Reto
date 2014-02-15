<?php
	
	include 'connect.php';
	
	if(isset($_POST['botonup'])){
		$name = $_POST['nameup'];
		$file = $_FILES['file']['name'];
		$file_type = $_FILES['file']['type'];
		$file_size = $_FILES['file']['size'];
		$file_tmp = $_FILES['file']['tmp_name'];
		$random_name = rand();

		if(empty($name) or empty($file)){
			echo "Ingresar todos los datos";
		}else{

			move_uploaded_file($file_tmp, 'img/' .$random_name. '.jpg');
			mysql_query("INSERT INTO `imagenes` VALUES('', '$name','$random_name.jpg')");
		}
	}
	 
	
?>