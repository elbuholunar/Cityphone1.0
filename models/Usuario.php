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

		Public function __Construct($id,$nombre,$apellido,$tipoUsuario,$userName,$password,$email,$telFijo,$telMovil,$estado){
			$this->id = $id;
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->tipoUsuario = $tipoUsuario;
			$this->userName = $userName;
			$this->password = $password;
			$this->email = $email;
			$this->telFijo = $telFijo;
			$this->telMovil = $telMovil;
			$this->estado = $estado;
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
			echo "hola inmundo";
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