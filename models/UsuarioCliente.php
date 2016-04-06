<?php 
	require_once("Usuario.php");
	Class UsuarioCliente extends Usuario{		
		private $ubicacionApto;

		Public function __Construct($id,$nombre,$apellido,$tipoUsuario,$userName,$password,$email,$telFijo,$telMovil,$estado,$ubicacionApto){	
			parent::__Construct($id,$nombre,$apellido,$tipoUsuario,$userName,$password,$email,$telFijo,$telMovil,$estado);		
			$this->ubicacionApto = $ubicacionApto;			
		}

		public function getUbicacionApto(){
			return $this->ubicacionApto;
		}
	}
?>