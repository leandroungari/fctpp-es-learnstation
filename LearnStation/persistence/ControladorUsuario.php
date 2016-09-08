<?php

	
	/**
	* 
	*/
	class ControladorUsuario{
		
		private $usuarioAtual;
		private $administradorAtual;

		public function __construct(){
			
		}

		/////////////////////
		public function cancelarAmizade($nomeUsuario){
			$amigo = $this->buscarUsuario($nomeUsuario);
			$this->removerAmizade($usuarioAtual, $amigo);
		}

		public function denunciarConteudo($tipo, $usuario, $mensagem){

			session_start();
			$denuncia = new Denuncia($tipo, $usuario, $mensagem);
			$_SESSION['controladorDenuncia']->registrarDenuncia($denuncia);
		}




		/////////////////////

		public function removerAmizade($usuarioAtual, $amigo){

		}

		public function validar($nome, $data, $pais, $email, $senha){

			return true;
		}

		public function encerrarConta($usuario){

		}

		public function buscarUsuario($nomeUsuario){

		}

		public function efetuarAmizade($usuario, $amigo){

		}

		public function registrarUsuario($usuario){

		}

		public function validarUsuarioCadastrado($nome, $data, $pais, $email, $senha){

		}

		public function getProfessorAtual(){

		}

		public function getAlunoAtual(){

		}

		public function getUsuarioAtual(){

		}

		public function verificarSenha($senha){
			return true;
		}

		public function enviarMensagem($usuario, $amigo, $mensagem){

		}

		public function enviarNotificacaoMensagem($amigo, $usuario){

		}

		public function logout($usuarioAtual){

		}

		public function login($usuario){

		}

		public function validarLogin($email, $senha){
			return true;
		}

		public function buscarUsuarios($nomeUsuario){

		}

		public function receberMensagem($usuarioAtual, $amigo){

		}

		public function validarProfessor($professor, $senha){
			return true;
		}

		public function proxSolicitacaoAmizade($usuarioAtual){

		}

		public function aceitarAmizade($usuarioAtual, $amigo){

		}

		public function excluirSolicitacaoAmizade($usuarioAtual, $amigo){

		}

	}



?>