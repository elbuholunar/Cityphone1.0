<?php 
	require_once('../models/Usuario.php');
	/**
	* 
	*/
	
	class usuarioController extends Usuario
	{ 
		
		
		function __construct($id,$nombre,$apellido,$tipoUsuario,$userName,$password,$email,$telFijo,$telMovil,$estado)
		{
			parent::__construct($id,$nombre,$apellido,$tipoUsuario,$userName,$password,$email,$telFijo,$telMovil,$estado);
		}
	}

	

	@$obj_usuarioController = 
		new usuarioController(
				$_POST['id'],
				$_POST['nombre'],
				$_POST['apellido'],
				$_POST['tipoUsuario'],
				$_POST['userName'],
				$_POST['password'],
				$_POST['email'],
				$_POST['telFijo'],
				$_POST['telMovil'],
				$_POST['estado']);

	
	$event = json_decode($_POST['event']);
	
	switch ($event->action) {
		case 'crear':
			$obj_usuarioController->crearUsuario();
			break;
		
		case 'actualizar':
			# code...
			break;

		case 'eliminar':
			# code...
			break;

		case 'leer':
			# code...
			break;
		case 'login':
			# code...
			break;
		default:

			break;
	}


 ?>