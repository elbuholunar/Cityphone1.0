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
	<script type="text/javascript" src="../../js/adminScripts.js"></script>
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
<div class="container-fluid" >
  <div>
    <ul id="myTabs" class="nav nav-tabs" role="tablist"> 
      <li role="presentation" class="">
        <a href="#home" class="active" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true" onclick=""><font id="title3" class="changeLanguages">Crear Usuarios</font></a>
      </li> 
      <li role="presentation">
        <a aria-expanded="false" href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" onclick="objActAdmon.cargue_doc()"><font id="title4" class="changeLanguages">Listado Usuarios</font></a>
      </li> 
    </ul>
    <div id="myTabContent" class="tab-content">
      <div role="tabpanel" class="tab-pane fade fade active in" id="home" aria-labelledby="home-tab">
        <br>
        <div class="row" >
          <div class="col-md-1 col-xd-1"></div> 
          <div class="col-md-10 col-xd-10 well">     
            <?php require_once '../../templates/template_form.userAddEdit.php'; ?>
          </div>
          <div class="col-md-4 col-xd-1"></div> 
        </div> 
      </div>
      <div role="tabpanel" class="tab-pane" id="profile" aria-labelledby="profile-tab">
        <br>
        <div class="well">
          <table class="table table-hover table-bordered">
            <thead>
              <tr class="text-primary">
                <th id="headListUser1" class="changeLanguages" style="text-align: center !important;">Identificación</th>
                <th id="headListUser2" class="changeLanguages" style="text-align: center !important;">Nombres</th>
                <th id="headListUser3" class="changeLanguages" style="text-align: center !important;">Apellidos</th>
                <th id="headListUser4" class="changeLanguages" style="text-align: center !important;">Estado</th>
                <th id="headListUser5" class="changeLanguages" style="text-align: center !important;">Acciones</th>
              </tr>
            </thead>
            <tbody id="dataUsers">
            </tbody>
          </table>
        </div>
      </div>
    </div> 
  </div>
</div>
<footer>
	<div class="footer">
	</div>
</footer>
</body>
</html>

<?php
  if (!empty($_COOKIE['success'])) {

    $captura_cookie = json_decode($_COOKIE['success']);
    $state = $captura_cookie->success;

    if ($state == 'success')
      require_once '../../modals/success.php';
    else
      require_once '../../modals/error.php';
  }
?>  