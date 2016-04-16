<?php 
	require_once('../libraries/php/proCrypt.php');
	require_once('../models/Usuario.php');
	/**
	* 
	*/
	
	class usuarioController
	{ 
		private $_objCrypt;
		private $_objUsuario;
		private $_nombre;
		private $_apellido;
		private $_tipoUsuario;
		private $_userName;
		private $_password;
		private $_email;
		private $_telFijo;
		private $_telMovil;
		
		function __construct($nombre,$apellido,$tipoUsuario,$userName,$password,$email,$telFijo,$telMovil,$estado)
		{
			$this->_objCrypt = new proCrypt();
			$this->_objUsuario = new Usuario();
		    $this->_nombre         = $nombre;
		    $this->_apellido       = $apellido;
		    $this->_tipoUsuario    = $tipoUsuario;
		    $this->_userName       = $userName;
		    $this->_password       = $password;
		    $this->_email          = $email;
		    $this->_telFijo        = $telFijo;
		    $this->_telMovil       = $telMovil;			
		}

		public function login()
		{
			# Campos a traer de la tabla
			$campos = array('id','userName','password');
			
			$pw = $this->_objCrypt->encrypt($this->_password);

			# Campos que se incluyen en la validacion WHERE DE LA SQL
			$field['userName'] = $this->_userName;
			$field['password'] = $pw;
			$register = Usuario::findCustom($campos, $field);

		}
	}

	

	@$obj_usuarioController = 
		new usuarioController(
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
				$obj_usuarioController->login();
			break;
		default:

			break;
	}


 ?>