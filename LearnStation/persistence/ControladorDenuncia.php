<?php

	/**
	* 
	*/
	class ControladorDenuncia{
		
		public function __construct(){
			
		}

		/////////////////////////////////////

		public function enviarNotificacaoAdvertencia(){

			$denuncia = $this->proxDenuncia();
			$usuarioDenunciado = $denuncia->recuperarUsuarioDenunciado();
			$this->denunciaAnalisada($administrador,$denuncia);
			$this->enviarAdvertenciaUsuario($usuarioDenunciado);
		}

		public function receberDenunciaUsuario(){

			if($this->existeDenuncia()){

				$denuncia = $this->proxDenuncia();
			}
		}

		public function removerConteudoInadequado($denuncia){

			$this->removerConteudoDenuncia($denuncia);
		}

		/////////////////////////////////////

		public function registrarDenuncia($denuncia){

		}

		public function existeDenuncia(){
			return true;
		}

		public function proxDenuncia(){

		}

		public function removerConteudoDenuncia(){

		}

		public function denunciaAnalisada($administrador, $denuncia){

		}

		public function enviarAdvertenciaUsuario($usuarioDenunciado){

		}
	}

?>