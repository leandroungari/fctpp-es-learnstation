<?php
	
	/**
	* 
	*/
	class Usuario {
		
		private $nome;
		private $data;
		private $pais;
		private $descricao;
		private $email;
		private $senha;

		public function __construct($nome = null, $data = null, $pais = null, $email, $senha, $descricao = null) {
			
			if($nome == null){

			}
			else{
				$this->nome = $nome;
				$this->data = $data;
				$this->pais = $pais;
				$this->descricao = $descricao;
				$this->email = $email;
				$this->senha = $senha;
			}
		}

		public function recuperarSenha(){

			return $this->senha;
		}
	}


?>