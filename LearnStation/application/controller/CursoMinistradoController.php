<?php

	/**
	* 
	*/
	class CursoMinistradoController extends Controller{
		
		public function index(){

			$this->view("cursoministrado");
		}

		public function adicionarAula(){
			session_start();
			$_SESSION['controladorCurso']->adicionarAula($nomeAula, $descricao, $conteudo);
		}

		public function removerAula(){
			session_start();
			$_SESSION['controladorUsuario']->removerAulaDoCurso($professor, $senha, $nomeAula, $curso);
		}
	}