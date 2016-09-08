<?php

	/**
	* 
	*/
	class ControladorCurso{
		
		private $cursoAtual;

		function __construct(){
			
		}

		////////////////////////////////////////
		public function adicionarAula($nomeAula, $descricao, $conteudo){

			session_start();
			$prof = $_SESSION['controladorUsuario']->getProfessorAtual();
			$aula = $prof->novaAula($nomeAula, $descricao, $conteudo);
			$this->atribuirAula($aula, $cursoAtual);

		}

		public function avaliarCurso($nota){

			$curso = $this->cursoAtual;
			$curso->atribuirNota($nota);
			$this->atualizarNotaCurso($curso);
		}

		public function cancelarInscricao(){

			session_start();
			$aluno = $_SESSION['controladorUsuario']->getAlunoAtual();
			$this->removerInscricaoCurso($aluno, $cursoAtual);
		}

		public function criarConta($nome, $data, $pais, $email, $senha){
			$validado = $this->validarUsuarioCadastro($nome, $data, $pais, $email, $senha);
			
			if($validado){
				$usuario = new Usuario($nome, $data, $pais, $email, $senha);
				$this->registrarUsuario($usuario);
			}
		}

		public function criarCurso($nome, $data, $area, $descricao){

			session_start();
			$validado = $this->validarCurso($nome, $data, $area, $descricao);

			if($validado){
				$curso = new Curso($nome, $data, $area, $descricao);
				$prof = $_SESSION['controladorUsuario']->getProfessorAtual();
				$prof->atribuirAutoria($curso);
				$this->registrarCurso($curso);
			}
		}

		public function efetuarInscricaoCurso(){

			session_start();
			$aluno = $_SESSION['controladorUsuario']->getUsuarioAtual();
			$this->registrarAlunoCurso($aluno,$this->cursoAtual)
		}

		public function listarCursos($nomeCurso){

			$cursos = $this->buscarCursos($nomeCurso);
		}

		///////////////////////////////////////

		public function atribuirAula($aula, $curso){

		}

		public function buscarCurso($nomeCurso){

		}

		public function validarCurso($nome, $data, $area, $descricao){

		}

		public function atualizarNotaCurso($curso){

		}

		public function removerInscricaoCurso($curso, $aluno){

		}

		public function registrarAlunoCurso($curso, $aluno){

		}

		public function buscarCursos($nomeCurso){

			$lista = array();

			return $lista;
		}

		public function buscarAula($nomeAula, $curso){

			return $aula;
		}

		public function removerAula($aula, $curso){
			
		}
	}

?>