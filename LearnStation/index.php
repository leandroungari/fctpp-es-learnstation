<?php


	require_once "system/core/System.php";


	require_once "persistence/ControladorUsuario.php";
	require_once "persistence/ControladorCurso.php";
	require_once "persistence/ControladorDenuncia.php";
	require_once "persistence/Usuario.php";
	require_once "persistence/Administrador.php";
	require_once "persistence/Professor.php";
	require_once "persistence/Aluno.php";
	require_once "persistence/Aula.php";
	require_once "persistence/Denuncia.php";
	require_once "persistence/Curso.php";

	session_start();

	$_SESSION['controladorUsuario'] = new ControladorUsuario();
	$_SESSION['controladorCurso'] = new ControladorCurso();
	$_SESSION['controladorDenuncia'] = new ControladorDenuncia();


	$system = new System(isset($_GET['key']) ? $_GET['key'] : "index/index");
	$system->loadLibrary();
	$system->run();
