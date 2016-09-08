<?php

	/**
	* 
	*/
	class Curso {
		
		private $nome;
		private $data;
		private $area;
		private $nota;
		private $descricao;
		private $quantAulas;
		private $quantVotos;
		private $professor;

		public function __construct($nome, $data, $area, $descricao) {
			
		}

		private function recalcularNota($nota){

		}

		public function atribuirNota($nota){

			$this->recalcularNota($nota);
		}
	}

?>