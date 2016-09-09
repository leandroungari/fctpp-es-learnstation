<?php

	/**
	* 
	*/
	class CursoController extends Controller{
		
		public function index(){

			$this->view("curso");
		}

		public function avaliarCurso(){
			session_start();
			$_SESSION['controladorCurso']->avaliarCurso($nota);
		}

		public function cancelarInscricao(){
			session_start();
			$_SESSION['controladorCurso']->cancelarInscricao();
		}

		public function inscreverUsuario(){
			session_start();
			$_SESSION['controladorCurso']->efetuarInscricaoCurso();
		}
	}