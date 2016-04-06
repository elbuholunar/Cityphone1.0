<?php 

	Class Extension {		
		private $id;
		private $NoExtension;
		private $idUsuario;
		private $ordenMarcado;

		Public function __Construct($id, $NoExtension, $idUsuario, $ordenMarcado){				
			$this->id = $id;	
			$this->NoExtension = $NoExtension;	
			$this->idUsuario = $idUsuario;			
			$this->ordenMarcado = $ordenMarcado;	
		}

		public function getId(){
			return $this->id;
		}

		public function getNoExtension(){
			return $this->NoExtension;
		}
		
		public function getIdUsuario(){
			return $this->idUsuario;
		}
		public function getOrdenMarcado(){
			return $this->ordenMarcado;
		}
		
	}
?>