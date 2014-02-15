<!doctype html>
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
    <?php include 'connect.php'; ?>
    <nav class="top-bar">

      <ul class="title-area">
       <!--  <li><h3><a href="#"style="display:none;" >nombre usuario</a> -->
        <li class="name"><h1><a href="index.php">Fuckr</a>
      </ul>

      <section class="top-bar-section">
        <ul class="right" id="top">         

          <li><a href="#" data-reveal-id="upload" id="uploadtop" style="display:none;" class="answer_list" data-reveal>Upload</a><li>
          <li><a href="#" data-reveal-id="login" id="logintop" data-reveal>Log In</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contactenos</a></li>
          <li><a href="#topimagenes">Top Imagenes</a></li>

        </ul>
    </nav>

    <!-- Modal -->
    <!-- registro -->
    <div id="registro" class="reveal-modal" data-reveal>

         <h2 class="form-signin-heading">Registro</h2>
          <p>Email:</p><input type="email" id="regemail" required/>
          <p>Username:</p><input type="text" id="reguser"required/>
          <p>Password:</p><input type="password" id="regpass" required/>
           <br />
          <a  class="button radius" id="botonregistro">Registrar</a>
       
    
        <a href="#" data-reveal-id="login" data-reveal>Login here!</a>
        <a class="close-reveal-modal" href="#">x</a>
      </div>

      <!-- Login -->

      <div id="login" class="reveal-modal" data-reveal>
              
        
          <h2 class="form-signin-heading">LogIn</h2>
          <p>Username:</p><input type="text" id="campouser" required/>
          <p>Password:</p><input type="password" id="campopass" required/>
           <br />
          <a  class="button radius" id="botonlogin" >Login</a>
       
    
        <a href="#" data-reveal-id="registro" data-reveal>Signup here!</a>
        <a class="close-reveal-modal" href="#">x</a>
      </div>

      <!-- Upload -->

      <div id="upload" class="reveal-modal" data-reveal>
              
        <form enctype='multipart/form-data' action='upload.php' method='post'>
          <h2 class="form-signin-heading">Upload</h2>
          <p>File: </p><input type='file' id="botonfile" name='file' />
          <br/>
          <p>Nombre archivo:</p>
          <input type='text' name='nameup' required>
          
           <br />
          <input type='submit' value='Upload' name='botonup' class="button radius" id="botonupload" >
       
        <br />
        <a href="#" data-reveal-id="registro" data-reveal>No puedes subir la imagen click aca!</a>
        <a class="close-reveal-modal" href="#">x</a>
      </form>
      </div>

    <div class="row">
      <div class="large-8 columns">
        <div class="panel">

        <h2>Fuckr</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras auctor lobortis felis. Proin sodales nisl dolor. Fusce rhoncus convallis tellus. Aliquam ut dignissim tortor. Quisque eget ligula magna. Vestibulum non hendrerit ante, at fringilla massa. Pellentesque et ligula pretium magna rhoncus sodales id in velit. Pellentesque in tempus ante, porttitor consectetur libero. Sed ut tempus ligula. Fusce congue interdum massa, ac consequat felis interdum sit amet. Sed vel risus ac tellus imperdiet pretium. Donec id leo luctus, hendrerit tellus eu, scelerisque justo. Suspendisse vel lobortis velit. Maecenas mattis massa sit amet vulputate eleifend. Nunc elementum, elit sed sagittis suscipit, nulla nulla sollicitudin felis, a blandit dolor arcu dictum tortor.</p>

        <a class="button radius" href="#">Mas Informacion</a>
        </div>
      </div>
      <div class="large-4 columns">
        <img  src="img/fuckr.jpg"/>
      </div>
      
      <hr />
      <div class="row">
        <div class="large-12 columns">
          <h3>Que es esta copia de flickr llamada fuckr</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras auctor lobortis felis. Proin sodales nisl dolor. Fusce rhoncus convallis tellus. Aliquam ut dignissim tortor. Quisque eget ligula magna. Vestibulum non hendrerit ante, at fringilla massa. Pellentesque et ligula pretium magna rhoncus sodales id in velit. Pellentesque in tempus ante, porttitor consectetur libero. Sed ut tempus ligula. Fusce congue interdum massa, ac consequat felis interdum sit amet. Sed vel risus ac tellus imperdiet pretium. Donec id leo luctus, hendrerit tellus eu, scelerisque justo. Suspendisse vel lobortis velit. Maecenas mattis massa sit amet vulputate eleifend. Nunc elementum, elit sed sagittis suscipit, nulla nulla sollicitudin felis, a blandit dolor arcu dictum tortor.</p>
        </div>
      </div>
      <hr />

      <div class="row">
       
        <div class="contenedor large-12 columns" id="topimagenes">
          <h3>Top imagenes de la semana</h3>
          
            <?php
          


              $query = mysql_query("SELECT `id`, `nombre`, `location` FROM `imagenes`");
              $arrayimagen = array();
              while($run = mysql_fetch_assoc($query)){
                array_push($arrayimagen, $run);
              }
            ?>

             <script>

             function SaveFile(fname, img){
              document.getElementById('img').contentWindow.document.execCommand('saveas', null ,fname);
              }
              var arreglo = JSON.parse('<?php echo json_encode($arrayimagen)?>') ;
              for (var i = 0; i < arreglo.length; i++){
                var nombres = arreglo[i].nombre;
                console.log(nombres); 
                var str = '<img src="img/'+arreglo[i].location+'"/><br />';
                $('.contenedor').append(nombres);
                
                $('.contenedor').append(str);

              }
              

            </script>

        <!--    <?php echo $url?>
            <img src='img/ <?php echo $url; ?>'/>
            <br/>
            <b><?php echo $nombrefoto ?><b/>
             <li data-tooltip class="has-tip" title="familia en irish pub"><img src="img/familia.jpg"/></li>
            <li><img src="img/familia.jpg"/></li>
            <li><img src="img/familia.jpg"/></li> -->
          </ul>
      </div>
      

      <hr />
    </div>    
    <script src="js/foundation.min.js"></script>

    <script>
      $(document).foundation();
    </script>
  </body>
</html>
