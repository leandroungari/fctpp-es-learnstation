<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>LearnStation</title>
	<script src="<?php echo $assets['script']?>jquery-3.1.0.min.js"></script>
	<script src="<?php echo $assets['script']?>cursoministrado.js"></script>
	<link rel="stylesheet" href="<?php echo $assets['style']?>cursoministrado.css">
	<link rel="stylesheet" href="<?php echo $assets['style']?>header.css">
	<script src="<?php echo $assets['script']?>header.js"></script>
</head>
<body>
	<?php require_once "header.php" ?>
	<section>
		<div class="curso">
			<div class="titulo">Estrutura de Dados I</div>
			<div class="descricao">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lectus diam, mollis a velit eget, rutrum pretium nulla. Duis vitae diam eget elit efficitur cursus. Integer luctus lacus a quam finibus pellentesque. Integer tincidunt sit amet tortor eget sollicitudin. Pellentesque non tellus lectus. Etiam volutpat, nunc eu iaculis feugiat, nunc leo tincidunt tortor, ac tincidunt neque dui in nunc. Fusce tincidunt lorem ac volutpat pharetra. Maecenas id sapien in elit rhoncus ornare. Proin blandit nulla est, eu mattis tortor egestas ac.</p>
				<p>Vivamus hendrerit ullamcorper scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque ut tempor nisl. Mauris vitae lobortis augue. Aenean semper, quam luctus tempor tristique, sapien ligula ultricies ante, in congue augue risus ac tellus. Sed consectetur sem sed lorem efficitur tempor. Suspendisse accumsan, orci quis malesuada molestie, lorem arcu pulvinar turpis, in commodo ligula sapien ac eros. Duis metus ex, fermentum eget lorem vitae, dignissim fringilla magna. Vestibulum fermentum dui non nunc imperdiet laoreet. Integer in sagittis nunc, quis pellentesque nulla. Cras metus justo, vestibulum ut nunc eget, condimentum feugiat nibh. Nulla vestibulum enim libero, eget vestibulum dui fermentum et.</p>					
			</div>
			
			<div class="topic">Nota média: 7.3</div>
			<div class="listagem">
				<header>Lista de Aulas</header>
				<div class="block-list">
					<div class="listagem-curso aula">01 - Alocação Dinâmica</div>			
					<div title="Remover aula"  class="remover-aula-button">X</div>
				</div>
				<div class="block-list">
					<div class="listagem-curso aula">02 - Lista Estática</div>			
					<div title="Remover aula"  class="remover-aula-button">X</div>
				</div>
				<div class="block-list">
					<div class="listagem-curso aula">03 - Lista Encadeada Simples</div>				
					<div title="Remover aula"  class="remover-aula-button">X</div>
				</div>
				<div class="block-list">
					<div class="listagem-curso aula">04 - Lista Encadeada Dupla e Circular</div>				
					<div title="Remover aula"  class="remover-aula-button">X</div>
				</div>
				<div class="block-list">
					<div class="listagem-curso aula">05 - Fila</div>				
					<div title="Remover aula"  class="remover-aula-button">X</div>
				</div>
				<div class="block-list">
					<div class="listagem-curso aula">06 - Pilha</div>				
					<div title="Remover aula"  class="remover-aula-button">X</div>
				</div>
				<div class="block-list">
					<div class="listagem-curso aula">07 - Exercício: Torre de Hanoi</div>				
					<div title="Remover aula"  class="remover-aula-button">X</div>
				</div>
				<div class="block-list">
					<div class="listagem-curso aula">08 - Listas Múltiplas</div>				
					<div title="Remover aula"  class="remover-aula-button">X</div>
				</div>
				<div class="block-list">
					<div class="listagem-curso aula">09 - Matriz Esparsa</div>				
					<div title="Remover aula"  class="remover-aula-button">X</div>
				</div>
				<div class="block-list">
					<div class="listagem-curso aula">10 - Desafio: Processamento de Imagem Bitmap</div>					
					<div title="Remover aula"  class="remover-aula-button">X</div>
				</div>
				<div class="block-list">
					<div class="listagem-curso aula">11 - Desafio: Labirinto do Rato</div>					
					<div title="Remover aula"  class="remover-aula-button">X</div>
				</div>
			</div>
			<div class="nova-aula">
				<header>Adicionar aula</header>
				<form>
					<input type="text" placeholder="Título da aula" name="titulo" title="Título da Aula" />
					<textarea placeholder="Descrição" class="form-element" name="desc" resizable="off"></textarea>
					<label class="form-element">Conteúdo<input type="file" name="conteudo" title="Conteúdo" multiple/></label>
					<div class="form-element-button add-aula">Enviar</div>
				</form>
			</div>
			<div class="message-success message-remover-aula">Aula removida com sucesso</div>
			<div class="message-success message-add-aula">Aula adicionada com sucesso</div>
		</div>
	</section>
	<footer>
		<div><img class="footer-image" src="<?php echo $assets['images']?>theme/chess-white.png"></div>
	</footer>
</body>
</html>