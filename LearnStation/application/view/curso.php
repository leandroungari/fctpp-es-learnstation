<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>LearnStation</title>
	<script src="<?php echo $assets['script']?>jquery-3.1.0.min.js"></script>
	<script src="<?php echo $assets['script']?>curso.js"></script>
	<link rel="stylesheet" href="<?php echo $assets['style']?>curso.css">
	<link rel="stylesheet" href="<?php echo $assets['style']?>header.css">
	<script src="<?php echo $assets['script']?>header.js"></script>
</head>
<body>
	<?php require_once "header.php" ?>
	<section>
		<div class="message-success message-avaliar-curso">Curso avaliado com sucesso</div>
		<div class="message-success message-cancelar-inscricao">Requisição de cancelamento de inscrição enviada</div>
		<div class="message-success message-efetuar-inscricao">Inscrição efetuada com sucesso</div>
		<div class="curso">
			<div class="form-element-button extra cancelar-inscricao" title="Cancelar inscrição">-</div>
			<div class="form-element-button extra solicitar-inscricao" title="Solicitar inscrição">+</div>
			<div class="titulo">Estrutura de Dados I</div>
			<div>
				<p>Ministrante: José Carlos Gomes</p>
			</div>

			<br>
			<div class="descricao">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lectus diam, mollis a velit eget, rutrum pretium nulla. Duis vitae diam eget elit efficitur cursus. Integer luctus lacus a quam finibus pellentesque. Integer tincidunt sit amet tortor eget sollicitudin. Pellentesque non tellus lectus. Etiam volutpat, nunc eu iaculis feugiat, nunc leo tincidunt tortor, ac tincidunt neque dui in nunc. Fusce tincidunt lorem ac volutpat pharetra. Maecenas id sapien in elit rhoncus ornare. Proin blandit nulla est, eu mattis tortor egestas ac.</p>
				<p>Vivamus hendrerit ullamcorper scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque ut tempor nisl. Mauris vitae lobortis augue. Aenean semper, quam luctus tempor tristique, sapien ligula ultricies ante, in congue augue risus ac tellus. Sed consectetur sem sed lorem efficitur tempor. Suspendisse accumsan, orci quis malesuada molestie, lorem arcu pulvinar turpis, in commodo ligula sapien ac eros. Duis metus ex, fermentum eget lorem vitae, dignissim fringilla magna. Vestibulum fermentum dui non nunc imperdiet laoreet. Integer in sagittis nunc, quis pellentesque nulla. Cras metus justo, vestibulum ut nunc eget, condimentum feugiat nibh. Nulla vestibulum enim libero, eget vestibulum dui fermentum et.</p>					
			</div>
			
			<div class="topic">Nota média: 7.3</div>
			<div class="avalie">Avalie este Curso 
				<input type="number" step="0.01" max="10" min="0">
				<div class="form-element-button avaliar-curso">Enviar Nota</div>
			</div>
			<div class="listagem">
				<header>Lista de Aulas</header>
				<div class="listagem-curso aula">01 - Alocação Dinâmica</div>
				<div class="listagem-curso aula">02 - Lista Estática</div>
				<div class="listagem-curso aula">03 - Lista Encadeada Simples</div>
				<div class="listagem-curso aula">04 - Lista Encadeada Dupla e Circular</div>
				<div class="listagem-curso aula">05 - Fila</div>
				<div class="listagem-curso aula">06 - Pilha</div>
				<div class="listagem-curso aula">07 - Exercício: Torre de Hanoi</div>
				<div class="listagem-curso aula">08 - Listas Múltiplas</div>
				<div class="listagem-curso aula">09 - Matriz Esparsa</div>
				<div class="listagem-curso aula">10 - Desafio: Processamento de Imagem Bitmap</div>
				<div class="listagem-curso aula">11 - Desafio: Labirinto do Rato</div>
			</div>
		</div>
			

	</section>
	<footer>
		<div><img class="footer-image" src="<?php echo $assets['images']?>theme/chess-white.png"></div>
	</footer>
</body>
</html>