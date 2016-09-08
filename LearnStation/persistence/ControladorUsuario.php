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

		public function encerrarContaUsuario(){

			$senha = $this->usuarioAtual->recuperarSenha();
			if($this->verificarSenha()){
				$this->encerrarConta($this->usuarioAtual);
			}
		}

		public function enviarMensagemAmigo($mensagem){
			
			$this->usuarioAtual = $this->getUsuarioAtual();
			$amigo = $this->buscarUsuario();
			$this->enviarMensagemAmigo($this->usuarioAtual, $amigo, $mensagem);
			$this->enviarNotificacaoMensagem($amigo, $this->usuarioAtual);
		}

		public function enviarSolicitacaoAmizade($nomeUsuario){

			$amigo = $this->buscarUsuario($nomeUsuario);
			$this->efetuarAmizade($this->usuarioAtual, $amigo);
		}

		public function finalizarSessaoUsuario(){

			$this->logout($this->usuarioAtual);
		}

		public function iniciarSessaoUsuario($email, $senha){

			if($this->validarLogin($email, $senha)){

				$usuario = $this->criar($email, $senha);
				$this->login($usuario);
			}
		}

		public function listarUsuarios($nomeUsuario){
			
			$usuarios = $this->buscarUsuarios($nomeUsuario);
		}

		public function receberMensagemAmigo($nomeUsuario){

			$amigo = $this->buscarUsuario($nomeUsuario);
			$mensagem = $this->receberMensagem($this->usuarioAtual, $amigo);
		}

		public function removerAulaDoCurso($professor, $senha, $nomeAula, $curso){

			if($this->validarProfessor($professor, $senha)){

				session_start();
				$aula = $_SESSION['controladorCurso']->buscarAula($nomeAula, $curso);
				$_SESSION['controladorCurso']->removerAula($aula);
			}
		}

		public function responderSolicitacaoAmizade($respostaDaSolicitacao){

			$amigo = $this->proxSolicitacaoAmizade($this->usuarioAtual);
			
			if ($respostaDaSolicitaca) $this->aceitarAmizade($this->usuarioAtual, $amigo);
			else excluirSolicitacaoAmizade($this->usuarioAtual, $amigo);
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