<html class="no-js" lang="en">
  <head>
    <script src="js/jquery-2.1.0.min.js"></script>    
    <script src="js/controlador.js"></script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reto</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
  	<?php
  		$username = "root";
	$password = "mwtDRC89";
	$hostname = "localhost";
	
	$conexion = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
	$selected = mysql_select_db("pruebadb", $conexion);
  		$res = mysql_query("SELECT * FROM `imagenes`");
  		echo "<table>";

  		while($row = mysql_fetch_array($res)){

  			echo "<tr>";
  			echo "<td>";?> <img src"<?php echo $row["Desierto"]; ?> " <?php echo "</td>";

  			echo "<td>"; echo $row["name"]; echo "</td>";


  			echo "</tr>";
  		}
  		echo "<table>";
  	?>
  </body>
</html>

