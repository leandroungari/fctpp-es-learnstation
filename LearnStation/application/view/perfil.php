<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>LearnStation</title>
	<script src="<?php echo $assets['script']?>jquery-3.1.0.min.js"></script>
	<script src="<?php echo $assets['script']?>perfil.js"></script>
	<link rel="stylesheet" href="<?php echo $assets['style']?>perfil.css">
</head>
<body>
	<header class="header-box">
		<div class="header-element-title">LearnStation</div>
		<div class="header-element-field"><form action=""><input type="text"/></form></div>
	</header>
	<section>
		<div class="info">
			<div class="photo">
				<img width="300" height="200" src="<?php echo $assets['images']?>perfil.gif" alt="Minha foto pessoal">
			</div>
			<div class="description">
				<p>Nome: <span>José Pereira</span></p>
				<p>Data de Nascimento: <span>28/05/1989</span></p>
				<p>País: <span>Brasil</span></p>
				<p>Descrição: <span>Graduando em Engenharia Mecatrônica pela UFTPR - Apucarana/PR</span></p>
			</div>
		</div>
		<div class="listagem">
			<header>Cursos Participados</header>
			<div class="listagem-curso cc">Introdução a PHP Orientado a Objetos</div>
			<div class="listagem-curso cc">Design Patterns: Advanced</div>
			<div class="listagem-curso cc">Introdução a PHP Orientado a Objetos</div>
		</div>
		<div class="listagem">
			<header>Cursos Ministrados</header>
			<div class="form-element-button" title="Novo Curso">+</div>
			<div class="listagem-curso cm">Algoritmos e Técnicas de Programação</div>
			<div class="listagem-curso cm">Teoria de Grafos</div>
			<div class="listagem-curso cm">Estrutura de Dados I: Básico</div>
		</div>

	</section>
	<footer>
		<div><img class="footer-image" src="<?php echo $assets['images']?>theme/chess-white.png"></div>
	</footer>
</body>
</html>