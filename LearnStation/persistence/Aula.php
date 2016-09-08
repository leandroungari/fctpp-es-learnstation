<?php

	/**
	* 
	*/
	class Aula {
		
		private $nomeAula;
		private $descricao;
		private $conteudo;

		public function __construct($nomeAula, $denuncia, $conteudo){
			
			$this->nomeAula = $nomeAula;
			$this->descricao = $descricao;
			$this->conteudo = array();
			$this->adicionarConteudo($conteudo);
		}

		public function adicionarConteudo(){

		}
	}