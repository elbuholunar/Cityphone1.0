<?php 
  require_once ('../../libraries/php/Simple_sessions.php');
  $obj_Session = new Simple_sessions();
?>
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
  <script type="text/javascript" src="../../js/manageJson.js"></script>
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
        <li><a href="../users/login.php" id="sesion" class="changeLanguages"><font id="sesion" class="changeLanguages">Link</font></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"  ><font id="Configurations" class="changeLanguages">Dropdown</font> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" id="createUser" class="changeLanguages">Action</a></li>
            <li><a href="#" id="updateUser" class="changeLanguages">Another action</a></li>
            <li><a href="#" id="showUsers" class="changeLanguages">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#" id="deleteUser" class="changeLanguages">Separated link</a></li>
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
  





<div class="general-content" style="padding: 25px 25px;">
  <form action="../../controllers/UsuarioController.php" method="POST" role="form" method="post">
    <legend>Creación Usuario</legend>
    <!--FILA 1-->
    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-3"></div>
        <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-3">
            <label for="">Tipo Identificación</label>
            <select name="tipoIdentificacion" id="inputTipoIdentificacion" class="form-control" required="required">
              <option value="">Seleccinar</option>
              <option value="1">Cedula</option>
              <option value="2">Cedula Extranjera</option>
              <option value="3">Tarjeta Identidad</option>
            </select>
        </div>
        <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-3">
            <label for="">Identificacion</label>
            <input type="text" name="identificacion" class="form-control" id="" placeholder="..." required="required">
        </div>       
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-3"></div>
    </div>
    <!--FILA 2-->
    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-3"></div>
        <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-3">
            <label for="">Nombres</label>
            <input type="text" name="nombre" class="form-control" id="" placeholder="..." required="required">
        </div>
        <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-3">
            <label for="">Apellidos</label>
            <input type="text" name="apellido" class="form-control" id="" placeholder="..." required="required">
        </div>       
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-3"></div>
    </div>
    <!--FILA 3-->
    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-3"></div>
        <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-3">
          <label for="">Telefono Fijo</label>
          <input type="text" name="telFijo" class="form-control" value="" placeholder="..." required="required">
        </div>
        <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-3">
          <label for="">Telefono Movil</label>
          <input type="text" name="telMovil" class="form-control" value="" placeholder="..." required="required">
        </div>       
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-3"></div>                
    </div>
    <!--FILA 4-->
    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-3"></div>
        <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-3">
            <label for="">Correo</label>
            <input type="text" name="email" class="form-control" value="" placeholder="..." required="required"> 
        </div>
        <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-3">
            <label for="">Tipo de usuario</label>
            <select name="tipoUsuario" id="input" class="form-control" required="required">
              <option value="">Seleccinar</option>
              <option value="1">Administrador</option>
              <option value="2">usuario</option>
            </select>
        </div>       
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-3"></div>                
    </div>
    <!--FILA 5-->
    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-3"></div>
        <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-3">
            <label for="">Estado</label>
            <select name="estado" id="input" class="form-control" required="required">
              <option value="">Seleccinar</option>
              <option value="1">Estado 1</option>
              <option value="2">Estado 2</option>
              <option value="3">Estado 3</option>
            </select>
        </div>
        <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-3"></div>       
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-3"></div>                
    </div>
    <!--FILA 5-->
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <input type="hidden" name="event" id="event" value='{"action":"crear"}' class="form-control"/>
          <input type="submit" value="Registrar" class="btn btn-primary pull-right btn-lg btn-block">          
        </div>                
    </div>       
  </form>
</div>


<footer>
  <div class="footer">
    
  </div>
  
</footer>
</body>
</html>