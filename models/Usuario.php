<?php 
	require_once ('../orm/ORM.php');

	Class Usuario extends ORM{
		private $id;
		private $nombre;
		private $apellido;
		private $tipoUsuario;
		private $userName;
		private $password;
		private $email;
		private $telFijo;
		private $telMovil;
		private $estado;
		protected static $table = 'usuario';

		Public function __Construct($data){
			
	        parent::__construct();

	        if ($data && sizeof($data)) {
	            $this->populateFromRow($data);
	        }
		}


	    private function populateFromRow($data) {
	        $this->id          = isset($data['id']) ? $data['id'] : null;
	        $this->nombre      = isset($data['nombre']) ? $data['nombre'] : null;
	        $this->apellido    = isset($data['apellido']) ? $data['apellido'] : null;
	        $this->tipoUsuario = isset($data['tipoUsuario']) ? $data['tipoUsuario'] : null;
	        $this->userName    = isset($data['userName']) ? $data['userName'] : null;
	        $this->password    = isset($data['password']) ? $data['password'] : null;
	        $this->email       = isset($data['email']) ? $data['email'] : null;
	        $this->telFijo     = isset($data['telFijo']) ? $data['telFijo'] : null;
	        $this->telMovil    = isset($data['telMovil']) ? $data['telMovil'] : null;
	        $this->estado      = isset($data['estado']) ? $data['estado'] : null;
	    }

		public function getId(){
			return $this->id;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function getApellido(){
			return $this->apellido;
		}
		public function getTipoUsuario(){
			return $this->tipoUsuario;
		}
		public function getUserName(){
			return $this->userName;
		}
		public function getPassword(){
			return $this->password;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getTelFijo(){
			return $this->telFijo;
		}
		public function getTelMovil(){
			return $this->telMovil;
		}
		public function getEstado(){
			return $this->estado;
		}

		Protected function cambioEstado($newEstado){
			$this->estado = $newEstado;
			actualizarUsuario();
			return true;
		}
		Protected function cambioPassword($oldPassword,$newPassword){
			if($oldPassword == $this->password){
				$this->password = $newPassword;
				actualizarUsuario();
				return true;
			}	
			return false;

		}
		Protected function crearUsuario(){
			return true;
		}
		Protected function actualizarUsuario(){
			return true;
		}
		Protected function eliminarUsuario(){
			return true;
		}
	}

?>