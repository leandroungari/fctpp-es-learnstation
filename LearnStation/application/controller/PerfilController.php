<?php

	/**
	* 
	*/
	class PerfilController extends Controller{
		
		public function index(){

			$this->view("perfil");
		}

		public function cancelarAmizade(){
			session_start();
			$_SESSION['controladorUsuario']->cancelarAmizade($nomeUsuario);
		}

		public function solicitarAmizade(){
			session_start();
			$_SESSION['controladorUsuario']->enviarSolicitacaoAmizade($nomeUsuario);
		}

		public function adicionarCurso(){
			session_start();
			$_SESSION['controladorCurso']->criarCurso($nome, $data, $area, $descricao);
		}

		public function adicionarDenuncia(){
			session_start();
			$_SESSION['controladorUsuario']->denunciarConteudo($tipo, $usuario, $mensagem);
		}

		public function encerrarConta(){
			session_start();
			$_SESSION['controladorUsuario']->encerrarContaUsuario();
		}

		public function enviarMensagem(){
			session_start();
			$_SESSION['controladorUsuario']->enviarMensagemAmigo($mensagem);
		}

		public function notificarUsuario(){
			session_start();
			$_SESSION['controladorDenuncia']->enviarNotificacaoAdvertencia();
		}

		public function logout(){
			session_start();
			$_SESSION['controladorUsuario']->finalizarSessaoUsuario();
		}

		public function pesquisar(){
			session_start();
			$usuarios = $_SESSION['controladorUsuario']->listarUsuarios($nomeUsuario);
			$cursos = $_SESSION['controladorCurso']->listarCursos($nomeCurso);
		}

		public function receberDenuncia(){
			session_start();
			$denuncia = null;

			do{

				$denuncia = $_SESSION['controladorDenuncia']->receberDenunciaUsuario();

			}while($denuncia != null);
		}

		public function receberMensagem(){
			session_start();
			$_SESSION['controladorUsuario']->receberMensagemAmigo($nomeUsuario);

		}

		public function removerConteudo(){

			session_start();
			$_SESSION['controladorDenuncia']->removerConteudoInadequado($denuncia);
			$this->notificarUsuario();
		}

		public function aceitarAmizade(){
			session_start();
			$_SESSION['controladorUsuario']->responderSolicitacaoAmizade(true);
		}

		public function recusarAmizade(){
			session_start();
			$_SESSION['controladorUsuario']->responderSolicitacaoAmizade(false);
		}
	}