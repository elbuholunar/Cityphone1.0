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

		public function loginValidated()
		{
			# Campos a traer de la tabla
			$campos = array('id','userName','password');
			
			$pw = $this->_objCrypt->encrypt($this->_password);

			# Campos que se incluyen en la validacion WHERE DE LA SQL
			$field['userName'] = $this->_userName;
			$register = Usuario::findCustom($campos, $field);

			# Validación nombre usuario en BD
			if (empty($register)) {
				$json_error = array('success' => 'error', 'error' => 'error1');
				$success = json_encode($json_error);
				$url     = '../views/users/login.php?success='.$success;
				header('location:'.$url);
			}else{
				# pw que se obtiene de BD
				$pw_DB = $register[0]->getPassword();

				# Validacion coincidencia de contraseñas
				if ($pw !== $pw_DB) {
					$json_error = array('success' => 'error', 'error' => 'error2');
					$success = json_encode($json_error);
					$url     = '../views/users/login.php?success='.$success;
					header('location:'.$url);

				}else{
					$url     = '../views/users/configuration.php';
					header('location:'.$url);
				}


			}

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
				$obj_usuarioController->loginValidated();
			break;
		default:

			break;
	}

//http://web.ontuts.com/tutoriales/aprendiendo-a-utilizar-la-libreria-curl-en-php/
 ?>