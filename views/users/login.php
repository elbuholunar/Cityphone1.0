<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link href="../../css/css_bootstrap/bootstrap.css" rel="stylesheet" media="screen"> 
	<link href="../../css/css_bootstrap/bootstrap-theme.css" rel="stylesheet" media="screen">
	<link href="../../css/general/generals.css" rel="stylesheet" media="screen"> 
	<script type="text/javascript" src="../../libraries/js/jquery/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="../../libraries/js/js_bootstrap/bootstrap.min.js"></script>	
	<script type="text/javascript" src="../../js/manageJson.js"></script>
	
	<title>Login</title>
	<script type="text/javascript">
		// Esta será la estructura que tendrá el objeto
		
	</script>
</head>
<body>

	<div class="container-fluid" >		
		<div class="row" style="margin-top:10%">
			<div class="col-md-4 col-xd-1"></div>	
			<div class="col-md-4 col-xd-10 well">
			 	<form action="../../controllers/UsuarioController.php" method="POST">
					<div class="form-group">
						
							<label for="userName" id="usernameLabel" class="changeLanguages">Nombre Usuario:</label>
							<input type="text" name="userName" id="username" placeholder="Nombre de Usuario" class="form-control changeLanguages"/>
						
					</div>
					<div class="form-group">
						
							<label for="password" id="passwordLabel" class="changeLanguages">Contraseña:</label>
							<input type="password" name="password" id="password" placeholder="Contraseña" class="form-control changeLanguages"/>
						
					</div>
					<div >				
							<input type="hidden" name="event" id="event" value='{"action":"login"}' class="form-control"/>
							<input type="submit" value="Enviar" id="btnLogin" class="btn btn-default changeLanguages"/>				
					</div>
				</form>
			</div>	
			<div class="col-md-4 col-xd-1"></div>	
		</div> 
	</div>
	<?php
		if (!empty($_COOKIE['success'])) {
			require_once '../../modals/error.php';
		}
	?>	
</body>
</html>