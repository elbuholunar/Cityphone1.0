<?php 
	require_once("Usuario.php");
	Class UsuarioAdmin extends Usuario{		
		private $cargo;
		private $tipoAdmin;

		Public function __Construct($id,$nombre,$apellido,$tipoUsuario,$userName,$password,$email,$telFijo,$telMovil,$estado,$cargo,$tipoAdmin){	
			parent::__Construct($id,$nombre,$apellido,$tipoUsuario,$userName,$password,$email,$telFijo,$telMovil,$estado);		
			$this->cargo = $cargo;	
			$this->tipoAdmin = $tipoAdmin;			
		}

		public function getCargo(){
			return $this->cargo;
		}
		
		public function getTipoAdmin(){
			return $this->tipoAdmin;
		}
	}
?>