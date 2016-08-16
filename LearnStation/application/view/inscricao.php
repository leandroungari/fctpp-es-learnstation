<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>LearnStation</title>
	<script src="<?php echo $assets['script']?>jquery-3.1.0.min.js"></script>
	<script src="<?php echo $assets['script']?>login.js"></script>
	<link rel="stylesheet" href="<?php echo $assets['style']?>login.css">
</head>
<body>
	<header class="header-box">
		<div class="header-element-title">LearnStation</div>
	</header>
	<section>
		<form class="login-box">
			<input type="email" placeholder="E-mail" />
			<input type="password" placeholder="Senha">
			<div class="form-element-button">Entrar</div>
		</form>
	</section>
	<footer>
		<div><img class="footer-image" src="<?php echo $assets['images']?>theme/chess-white.png"></div>
	</footer>
</body>
</html>