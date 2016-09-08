<?php

	/**
	* 
	*/
	class Denuncia{

		private $tipo;
		private $usuarioDenuncia;
		private $mensagem;
		
		public function __construct($tipo, $usuarioDenuncia, $mensagem){
			
			$this->tipo = $tipo;
			$this->usuarioDenuncia = $usuarioDenuncia;
			$this->mensagem = $mensagem;
		}

		public function recuperarUsuarioDenunciado(){

			return $this->usuarioDenuncia;
		}

	}

?>