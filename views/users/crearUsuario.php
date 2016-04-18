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
	<script type="text/javascript" src="../../js/manageJsonConf.js"></script>
	<link rel="stylesheet" type="text/css" href="../../css/users/principal.css">	
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
        <li class="active"><a href="#" > <font id="about" class="changeLanguages">quien</font> <span class="sr-only">(current)</span></a></li>
        <li><a href="#" ><font id="ContactUs" class="changeLanguages">Contacto</font></a></li>
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
          <input type="text" class="form-control changeLanguages" placeholder="Search" id="search">
        </div>
        <input type="submit" class="btn btn-default changeLanguages" id="buttonSearch" value="Buscar">
      </form>
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="#"><img src="../../resources/images/Es.png" class="btn-languages" alt="es-co" id="uno"></a></li>
      	<li><a href="#"><img src="../../resources/images/En.png" class="btn-languages" alt="en-us"></a></li>
      	<li><a href="#"><img src="../../resources/images/Fr.png" class="btn-languages" alt="fr"></a></li>
        <li><a href="../general/header.php" ><font id="logOut" class="changeLanguages">Link</font></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"  ><font id="Configurations" class="changeLanguages">Dropdown</font> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="crearUsuario.php"><font id="createUser" class="changeLanguages">Action</font></a></li>
            <li><a href="#"><font id="updateUser" class="changeLanguages">Another action</font></a></li>
            <li><a href="#"><font id="showUsers" class="changeLanguages">Something else here</font></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><font id="deleteUser" class="changeLanguages">Separated link</font></a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<header>
	<div class="header">
		<div class="titutlo shadow-text">
			<h1><font id="title" class="changeLanguages">SISTEMA DE CITOFONIA VIRTUAL</font></h1>
			<h3><font id="subtitle" class="changeLanguages">Con el Respaldo de Estecnología</font></h3>
		</div>
		<div class="logo">
			<img src="../../resources/images/logovp.png">
		</div>		
	</div>
</header>
	





<div class="general-content">
<h3 class="center-obj paddintop-20"><font id="title3" class="changeLanguages">CREAR NUEVO USUARIO</font></h3>
	<div class="container-fluid" >   
    <div class="row" >
      <div class="col-md-1 col-xd-1"></div> 
      <div class="col-md-10 col-xd-10 well">        
        <form action="../../controllers/UsuarioController.php" class="form-horizontal" method="POST">
          <div class="form-group">            
              <label for="name" id="nameLabel" class="changeLanguages col-sm-2">Nombre:</label>
              <div class="col-sm-10"><input type="text" name="name" id="name" placeholder="Nombre de Usuario" class="form-control changeLanguages"/> </div>         
          </div>
          <div class="form-group">            
              <label for="apellido" id="apellidoLabel" class="col-sm-2 changeLanguages">Apellido:</label>
              <div class="col-sm-10"><input type="text" name="apellido" id="apellido" placeholder="Nombre de Usuario" class="form-control changeLanguages"/>  </div>           
          </div>
          <div class="form-group">            
              <label for="tipo" id="tipoLabel" class="col-sm-2 changeLanguages">Tipo de Usuario:</label>
              <div class="col-sm-10">
                <select name="tipo" id="tipo" placeholder="Tipo de Usuario" class="form-control changeLanguages"/>    
                  <option value="1">Usuario</option>
                  <option value="2">Editor</option>
                  <option value="3">Adminstrador</option>
                  <option value="4">Super Administrador</option>
                </select> 
              </div>        
          </div>
          <div class="form-group">            
              <label for="userName" id="usernameLabel" class="col-sm-2 changeLanguages">Nombre Usuario:</label>
              <div class="col-sm-10"><input type="text" name="username" id="username" placeholder="Nombre de Usuario" class="form-control changeLanguages"/>      </div>       
          </div>
          <div class="form-group">            
              <label for="password" id="passwordLabel" class="col-sm-2 changeLanguages">Contraseña:</label>
              <div class="col-sm-10"><input type="password" name="password" id="password" placeholder="Contraseña" class="form-control changeLanguages"/>     </div>        
          </div>
          <div class="form-group">            
              <label for="password2" id="password2Label" class="col-sm-2 changeLanguages">Repita la Contraseña:</label>
              <div class="col-sm-10"><input type="password" name="password2" id="password2" placeholder="Contraseña" class="form-control changeLanguages"/>  </div>           
          </div>
          <div class="form-group">            
              <label for="email" id="emailLabel" class="col-sm-2 changeLanguages">Correo Electrónico:</label>
              <div class="col-sm-10"><input type="text" name="email" id="email" placeholder="Contraseña" class="form-control changeLanguages"/>     </div>        
          </div>
          <div class="form-group">            
              <label for="telFijo" id="telFijoLabel" class="col-sm-2 changeLanguages">Téléfono Fijo:</label>
              <div class="col-sm-10"><input type="text" name="telFijo" id="telFijo" placeholder="Contraseña" class="form-control changeLanguages"/>     </div>        
          </div>
          <div class="form-group">            
              <label for="telMovil" id="telMovilLabel" class="col-sm-2 changeLanguages">Teléfono Movil:</label>
              <div class="col-sm-10"><input type="text" name="telMovil" id="telMovil" placeholder="Contraseña" class="form-control changeLanguages"/>     </div>        
          </div>
          <div class="form-group">            
              <label for="text" id="estadoLabel" class="col-sm-2 changeLanguages">Estado:</label>
              <div class="col-sm-10">
                <select name="estado" id="estado" placeholder="Contraseña" class="form-control changeLanguages"/>   
                  <option value="1">En Espera</option>                  
                  <option value="2">Inactivo</option>
                  <option value="3">Suspendido</option>
                  <option value="4">Bloqueado</option>
                  <option value="5">Cambio de Contraseña</option>
                  <option value="6">Activo</option>
                </select>   
              </div>       
          </div>
          <div >        
              <input type="hidden" name="event" id="event" value='{"action":"login"}' class="form-control"/>
              <input type="submit" value="Crear Usuario" id="btnCrear" class="btn btn-default changeLanguages"/>     
          </div>
        </form>
      </div>  
      <div class="col-md-4 col-xd-1"></div> 
    </div> 
  </div>
</div>
<footer>
	<div class="footer">
		
	</div>
	
</footer>
</body>
</html>