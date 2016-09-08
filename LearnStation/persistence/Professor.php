<?php

	/**
	* 
	*/
	class Professor extends Usuario{
		
		private $nota;

		public function __construct($usuario){
			
		}

		public function novaAula($nomeAula, $descricao, $conteudo){
			$aula = new Aula($nomeAula, $descricao, $conteudo);
			return $aula;
		}

		public function atribuirAutoria($curso){

		}
	}	


?>