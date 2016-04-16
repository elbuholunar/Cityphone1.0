<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link href="../css/css_bootstrap/bootstrap.css" rel="stylesheet" media="screen"> 
	<link href="../css/css_bootstrap/bootstrap-theme.css" rel="stylesheet" media="screen">
	<script type="text/javascript" src="../libraries/js/jquery/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="../libraries/js/js_bootstrap/bootstrap.min.js"></script>
	
	<title>Login</title>
	<script type="text/javascript">
		// Esta será la estructura que tendrá el objeto
		function accion(action)		
		{
		    this.action = action;
		}

		function enviarAccion(campo, action) {
			var element1 = new accion(action);
			var listaProductos = [];			 
			listaProductos.push(element1);
			var productosJSON = JSON.stringify(listaProductos);
			document.getElementsByTagName(campo).value = productosJSON;
			return false;			
		}

	</script>
</head>
<body>
	<div class="container-fluid" >
	 	<form action="../controllers/UsuarioController.php" method="POST">
			<div class="form-group">
				<div class="row">
					<label for="userName">Nombre Usuario:</label>
					<input type="text" name="userName" id="userName" placeholder="Nombre de Usuario" />
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<label for="password">Contraseña:</label>
					<input type="password" name="password" id="password" placeholder="Contraseña" />
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<input type="hidden" name="event" id="event" value='{"action":"login"}' />
					<input type="submit" value="Enviar" />
				</div>
			</div>
		</form>
	</div>	

</body>
</html>