<?php

	/**
	* 
	*/
	class InscricaoController extends Controller{
		
		public function index(){

			$this->view("inscricao");
		}

		public function efetuarInscricao(){
			session_start();
			$_SESSION['controladorUsuario']->criarConta($nome, $data, $pais, $email, $senha);
		}
	}