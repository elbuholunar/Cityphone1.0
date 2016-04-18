<?php 
	require_once('../libraries/php/Simple_sessions.php');
	require_once('../libraries/php/proCrypt.php');
	require_once('../models/Usuario.php');
	/**
	* 
	*/
	
	class usuarioController
	{ 
		private $_objCrypt;
		private $_objUsuario;
		private $_tipoIdentificacion;
		private $_identificacion;
		private $_nombre;
		private $_apellido;
		private $_tipoUsuario;
		private $_userName;
		private $_password;
		private $_email;
		private $_telFijo;
		private $_telMovil;
		private $_estado;
		
		function __construct($tipoIdentificacion,$identificacion,$nombre,$apellido,$tipoUsuario,$userName,$password,$email,$telFijo,$telMovil,$estado)
		{
			$this->_objCrypt 			= new proCrypt();
			$this->_objUsuario 			= new Usuario(null);
		    $this->_tipoIdentificacion  = $tipoIdentificacion;
		    $this->_identificacion 		= $identificacion;
		    $this->_nombre         		= $nombre;
		    $this->_apellido       		= $apellido;
		    $this->_tipoUsuario    		= $tipoUsuario;
		    $this->_userName       		= $userName;
		    $this->_password       		= $password;
		    $this->_email          		= $email;
		    $this->_telFijo        		= $telFijo;
		    $this->_telMovil       		= $telMovil;
		    $this->_estado       		= $estado;
		}

		public function loginValidated()
		{
			# Campos a traer de la tabla
			$campos = array('*');
			
			$pw = $this->_objCrypt->encrypt($this->_password);

			# Campos que se incluyen en la validacion WHERE DE LA SQL
			$field['userName'] = $this->_userName;
			$register = Usuario::findCustom($campos, $field);

			# Validación nombre usuario en BD
			if (empty($register)) {
				$json_error = array('success' => 'error', 'error' => 'error1');
				$success = json_encode($json_error);
				setcookie("success", $success, time() + 60, "/"); 
				header('location:../views/users/login.php');
			}else{
				# pw que se obtiene de BD
				$pw_DB = $register[0]->getPassword();

				# Validacion coincidencia de contraseñas
				if ($pw !== $pw_DB) {
					$json_error = array('success' => 'error', 'error' => 'error2');
					$success = json_encode($json_error);
					setcookie("success", $success, time() + 60, "/"); 
					header('location:../views/users/login.php');
				}else{
					$data_session['id_user']      	= $register[0]->getId();					
					$data_session['nombre']       	= $register[0]->getNombre();			
					$data_session['apellido'] 		= $register[0]->getApellido();			
					$data_session['tipoUsuario']	= $register[0]->getTipoUsuario();			
					$data_session['userName'] 		= $register[0]->getUserName();			
					$data_session['email'] 		    = $register[0]->getEmail();			
					$data_session['telFijo'] 		= $register[0]->getTelFijo();			
					$data_session['telMovil'] 		= $register[0]->getTelMovil();			
					$data_session['estado'] 		= $register[0]->getEstado();
					$data_session['lan']			= $_COOKIE['lan'];
					
					$obj_Session = new Simple_sessions();
					$obj_Session->add_sess($data_session);

					header('location:../views/users/crearUsuario.php');
				}
			}
		}

		public function crearUsuario()
		{

			if(
				$this->validData('camposNull',$this->_tipoIdentificacion) && 
				$this->validData('camposNull',$this->_identificacion) &&
				$this->validData('camposNull',$this->_nombre) &&
				$this->validData('camposNull',$this->_apellido) &&
				$this->validData('camposNull',$this->_telFijo) &&
				$this->validData('camposNull',$this->_telMovil) &&
				$this->validData('camposNull',$this->_email) &&
				$this->validData('camposNull',$this->_tipoUsuario) &&
				$this->validData('camposNull',$this->_estado)
			){
				if (
					$this->validData('numerica',$this->_identificacion) &&
					$this->validData('numerica',$this->_telFijo) &&
					$this->validData('numerica',$this->_telMovil)
				) {
					if ($this->validData('email', $this->_email) != false) {
						$flag = true;
					}else{
						# Data sin formato email
						$flag = false;
					}
				}else{
					# Data con caracteres alfa-numericos
					$flag = false;
				}
			}else{
				# Data vacia
				$flag = false;
			}

			# REPUESTA SEGUN SEA EL CASO
			if ($flag) {
				$data_modelo['tipoIdentificacion'] = $this->_tipoIdentificacion;
				$data_modelo['identificacion']     = $this->_identificacion;
				$data_modelo['nombre']     		   = $this->_nombre;
				$data_modelo['apellido']     	   = $this->_apellido;
				$data_modelo['telFijo']     	   = $this->_telFijo;
				$data_modelo['telMovil']     	   = $this->_telMovil;
				$data_modelo['email']     	       = $this->_email;
				$data_modelo['tipoUsuario']        = $this->_tipoUsuario;
				$data_modelo['userName']           = $this->_userName;
				$data_modelo['password']		   = $this->_objCrypt->encrypt($this->_password);
				$data_modelo['estad']        	   = $this->_estado;

				$insercion = $this->_objUsuario->save($data_modelo);

				if (!$insercion['error']) {
					$json_error = array('success' => 'success', 'successVlr' => 'Usuario Creado!');
					$success = json_encode($json_error);
					setcookie("success", $success, time() + 60, "/");
					header('location:../views/users/crearUsuario.php');					
				}
				else{
					$json_error = array('success' => 'error', 'error' => 'error1');
					$success = json_encode($json_error);
					setcookie("success", $success, time() + 60, "/");
					header('location:../views/users/crearUsuario.php');
				}

			}
			else{
				$json_error = array('success' => 'error', 'error' => 'error1');
				$success = json_encode($json_error);
				setcookie("success", $success, time() + 60, "/");
				header('location:../views/users/crearUsuario.php');
			}
		}

		private function validData($validacion='', $vlr)
		{
			
			switch ($validacion) {
				case 'numerica':
					return is_numeric($vlr);
					break;
				
				case 'email':
					return filter_var($vlr, FILTER_VALIDATE_EMAIL);
					break;

				case 'camposNull':
					return !empty($vlr);
					break;			
			}
		}
	}

	

	@$obj_usuarioController = 
		new usuarioController(
				$_POST['tipoIdentificacion'],
				$_POST['identificacion'],
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
//http://www.forosdelweb.com/f18/aporte-file_get_contents-curl-http_request-724214/
 ?>