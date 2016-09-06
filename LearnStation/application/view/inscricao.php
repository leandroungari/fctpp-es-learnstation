<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>LearnStation</title>
	<script src="<?php echo $assets['script']?>jquery-3.1.0.min.js"></script>
	<script src="<?php echo $assets['script']?>inscricao.js"></script>
	<link rel="stylesheet" href="<?php echo $assets['style']?>inscricao.css">
</head>
<body>
	<header class="header-box">
		<div class="header-element-title">LearnStation</div>
	</header>
	<section>
		<form class="login-box">
			<input type="text" name="Nome" placeholder="Nome Completo" />
			<input type="date" name="data" title="Data de Nascimento" />
			<input type="text" name="pais" placeholder="País" />
			<input type="text" name="descricao" placeholder="Descrição pessoal">
			<input type="email" placeholder="E-mail" />
			<input type="password" placeholder="Senha" />
			<div class="form-element-button">Entrar</div>
		</form>
	</section>
	<footer>
		<div><img class="footer-image" src="<?php echo $assets['images']?>theme/chess-white.png"></div>
	</footer>
</body>
</html>