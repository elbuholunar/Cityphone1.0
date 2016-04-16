<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8"/> 
	<link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link href="../../css/css_bootstrap/bootstrap.css" rel="stylesheet" media="screen"> 
	<link href="../../css/css_bootstrap/bootstrap-theme.css" rel="stylesheet" media="screen">
	<script type="text/javascript" src="../../libraries/js/jquery/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="../../libraries/js/js_bootstrap/bootstrap.min.js"></script>
	<style type="text/css">
		body {	
			background-image: url(../../resources/images/fondo3.jpg);
			font-family: 'Fjalla One', sans-serif;
		}
		h1, h2, h3 {
			text-transform: uppercase;
		}
		.shadow-text {
			text-shadow: 5px 5px 5px #aaa;
		}
		.header {
			margin-top: 2px !important;
			width: 90%;
			height: 150px;
			background-color: #F2F2F2;
			margin-left: 5%;
			margin-right: 5%;
			-webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
            box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
			border-radius: 5px;
		}
		.titutlo {
			width: 80%;
			height: 150px;
			float: left;
			text-align: center;
			
		}
		.logo {
			width: 20%;
			height: 150px;
			float: left;
		}
		.logo img {
			width: 110%;
			max-height: 100%
			max-height: 100%;			
		}
		.general-content {
			margin-top: 4px !important;					
			width:90%;
			height: 500px;
			margin: 0 auto;
			background-color: #F2F2F2;
			-webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
            box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
			border-radius: 5px;
		}
		.size-default {
			width: 90%;
   			margin: 0 auto;
		}
		.btn-languages{
			width: 26px;
    		height: 17px;
		}
		.btn-languages:hover{
			width: 26px;
    		height: 17px;
    		-webkit-box-shadow: 0px 0px 20px -1px rgba(0,0,0,0.78);
			-moz-box-shadow: 0px 0px 20px -1px rgba(0,0,0,0.78);
			box-shadow: 0px 0px 20px -1px rgba(0,0,0,0.78);
		}
		
	</style>
	<script type="text/javascript">
		var languages = [];
		function lee_json() {
            $.getJSON("../../config/params.json", function(datos) {            	
            	languages = datos["languages"];  
            	var len = "Spanish";             
                //$.each(datos["languages"], function(idx,primo) {
                   
                //});
               changeLanguages(len);
            });
        }
        lee_json();

		$(function(){
			$(".btn-languages").click(function lenguage(){				
				var button = this.alt;
				var len = ""
				if(button == "es-co"){
					len = "Spanish"					
				}else if(button == "en-us"){
					len = "English"
				}else{
					len = "French"
				}
               changeLanguages(len);				
			});

		});

		function changeLanguages(len){
			// Dar valores a los botones de acuerdo al lenguaje
				$("#quien").html(languages[len]["buttons"]["about"]);
				$("#contactenos").html(languages[len]["buttons"]["ContactUs"]);	
				$("#buscar").prop("placeholder",languages[len]["buttons"]["search"]);
				$("#btnBuscar").html(languages[len]["buttons"]["buttonSearch"]);
				$("#configuracion").html(languages[len]["buttons"]["Configurations"]);
				$("#sesion").html(languages[len]["buttons"]["sesion"]);
				$("#titulo").html(languages[len]["buttons"]["title"]);
				$("#subtitulo").html(languages[len]["buttons"]["subtitle"]);
				$("#crear").html(languages[len]["buttons"]["createUser"]);
				$("#actualizar").html(languages[len]["buttons"]["showUsers"]);
				$("#ver").html(languages[len]["buttons"]["updateUser"]);
				$("#eliminar").html(languages[len]["buttons"]["deleteUser"]);
		}
	</script>
</head>
<body>
<nav class="navbar navbar-default size-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">VirtualPhone</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#" id="quien"> quien <span class="sr-only">(current)</span></a></li>
        <li><a href="#" id="contactenos">Contacto</a></li>
        <!--li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li-->
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" id="buscar">
        </div>
        <button type="submit" class="btn btn-default" id="btnBuscar">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="#"><img src="../../resources/images/Es.png" class="btn-languages" alt="es-co" id="uno"></a></li>
      	<li><a href="#"><img src="../../resources/images/En.png" class="btn-languages" alt="en-us"></a></li>
      	<li><a href="#"><img src="../../resources/images/Fr.png" class="btn-languages" alt="fr"></a></li>
        <li><a href="#" id="sesion">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="configuracion">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" id="crear">Action</a></li>
            <li><a href="#" id="actualizar">Another action</a></li>
            <li><a href="#" id="ver">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#" id="eliminar">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<header>
	<div class="header">
		<div class="titutlo shadow-text">
			<h1 id="titulo">SISTEMA DE CITOFONIA VIRTUAL</h1>
			<h3 id="subtitulo">Con el Respaldo de Estecnología</h3>
		</div>
		<div class="logo">
			<img src="../../resources/images/logovp.png">
		</div>		
	</div>
</header>
	





<div class="general-content">
	
</div>
<footer>
	<div class="footer">
		
	</div>
	
</footer>
</body>
</html>