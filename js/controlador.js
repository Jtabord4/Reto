$(function(){
init();
});

function init(){
	$("#botonlogin").on("click", function(){

    login();
	});
  
  $("#botonregistro").on("click", function(){
    registro();

  });

  $("#botonupload").on("click", function(){
    upload();
  });

}

function showup(){
  
  /*var elem = document.getElementById('top');
  elem.parentNode.removeChild(elem);
  /*document.getElementById('upload').style.display = "block";*/
}

function login(){
	var user, password;
	user = campouser.value;
	password = campopass.value;
	var url = "http://localhost/reto/login.php";
	var parametros = "user="+user+"&pass="+password; 

  ajax(url, parametros, 'exito');
}

function registro(){
  var user, password, email;
  email = regemail.value;
  user = reguser.value;
  password = regpass.value;
  var url =  "http://localhost/reto/registro.php";
  var parametros = "email="+email+"&user="+user+"&pass="+password;
  
  ajax(url, parametros, 'exitoreg');


}

function upload(){
  var nombre;


}

//cb funcion de exito call back
function ajax(url, parametros, cb){	
  $.ajax({
  dataType: 'jsonp',
  url: url,
  data: parametros,
  type: "GET",
  crossDomain: true, 
  jsonpCallback: cb,
  error: function(xhr, status, error) {
    console.log("test");
    console.log(xhr);
    console.log(status);
    console.log(error);
  }});
}

function exito(){
      document.getElementById("logintop").style.visibility = "hidden";
      document.getElementById('uploadtop').style.display = "block";
	     window.top.location.href = 'index.php#';
        

}

function exitoreg(){
  console.log("registro ");
}