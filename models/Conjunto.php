<?php 

	Class Conjunto {		
		private $id;
		private $nombre;
		private $direccion;
		private $correo;
		private $NoAptos;
		private $organizacionAptos;

		Public function __Construct($id,$nombre,$direccion,$correo,$NoAptos,$organizacionAptos){				
			$this->id = $id;	
			$this->nombre = $nombre;	
			$this->direccion = $direccion;			
			$this->correo = $correo;	
			$this->NoAptos = $NoAptos;
			$this->organizacionAptos = $organizacionAptos;
		}

		public function getId(){
			return $this->id;
		}
		
		public function getNombre(){
			return $this->nombre;
		}
		public function getDireccion(){
			return $this->direccion;
		}
		
		public function getCorreo(){
			return $this->correo;
		}
		public function getNoAptos(){
			return $this->NoAptos;
		}
		
		public function getOrganizacionAptos(){
			return $this->organizacionAptos;
		}
	}
?>