<?php

	/**
	* 
	*/
	class LoginController extends Controller{
		
		public function index(){

			$this->view('login');
		}

		public function login(){
			session_start();
			$_SESSION['controladorUsuario']->iniciarSessaoUsuario($email, $senha);
		}
	}