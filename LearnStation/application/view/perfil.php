<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>LearnStation</title>
	<script src="<?php echo $assets['script']?>jquery-3.1.0.min.js"></script>
	<script src="<?php echo $assets['script']?>perfil.js"></script>

	<link rel="stylesheet" href="<?php echo $assets['style']?>perfil.css">
	<link rel="stylesheet" href="<?php echo $assets['style']?>header.css">
	<script src="<?php echo $assets['script']?>header.js"></script>
</head>
<body>
	<?php require_once "header.php" ?>
	<section>
		<div class="message-success message-cancelar-amizade">Solicitação de cancelamento de amizade</div>
		<div class="message-success message-solicitar-amizade">Solicitação de amizade enviada com sucesso</div>
		<div class="message-success message-criar-curso">Novo curso criado com sucesso</div>
		<div class="message-success message-encerrar-conta">Conta encerrada com sucesso</div>
		<div class="message-success message-enviar-mensagem">Mensagem enviada com sucesso</div>
		<div class="message-success message-notificar-usuario">Usuário notificado com sucesso</div>
		<div class="message-success message-remover-conteudo">Conteúdo inadequado removido com sucesso</div>
		
		
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
			<div class="form-element-button extra enviar-mensagem" title="Enviar mensagem">-></div>
			<div class="form-element-button extra cancelar-amizade" title="Cancelar amizade">-</div>
			<div class="form-element-button extra solicitar-amizade" title="Solicitar amizade">+</div>
			
		</div>
		<div class="listagem">
			<header>Cursos Participados</header>
			<div class="listagem-curso cc">Introdução a PHP Orientado a Objetos</div>
			<div class="listagem-curso cc">Design Patterns: Advanced</div>
			<div class="listagem-curso cc">Introdução a PHP Orientado a Objetos</div>
		</div>
		<br><br>
		<div class="listagem cursos-ministrados">
			<header>Cursos Ministrados</header>
			<div class="form-element-button adicionar-curso-button" title="Novo Curso">+</div>
			<div class="listagem-curso cm">Algoritmos e Técnicas de Programação</div>
			<div class="listagem-curso cm">Teoria de Grafos</div>	
			<div class="listagem-curso cm">Estrutura de Dados I: Básico</div>	
		</div>

		<div class="novo-curso">
			<header>Novo Curso</header>
			<form>
				<input type="text" placeholder="Nome do curso" name="Nome do curso" title="Nome de curso" />
				<input type="text" placeholder="Área" name="area" title="Área">
				<textarea placeholder="Descrição" class="form-element" name="desc" resizable="off"></textarea>
				<div class="form-element-button add-aula">Enviar</div>
				<div class="form-element-button cancelar-aula">Cancelar</div>
			</form>
		</div>
		<br><br>
		<div class="listagem">
			<header>Configurações de conta</header>
			<div class="listagem-curso encerrar-conta-opcao">Encerrar conta de usuário</div>
		</div>
		<div class="encerrar-conta">
			<header>Encerrar conta</header>
			<form>
				<input type="password" placeholder="Entre com a senha" name="senha" title="Digite a senha do usuário">
				<div class="form-element-button confirmar-encerrar">Encerrar</div>
				<div class="form-element-button cancelar-encerrar">Cancelar</div>
			</form>
		</div>
		<div class="conversa">
			<header>Conversa</header>
			<form>
				<textarea name="conversa"></textarea>
				<div class="form-element-button enviar-texto">Enviar Mensagem</div>
				<div class="form-element-button cancelar-texto">Cancelar</div>
			</form>
		</div>
		<br><br>
		<div class="listagem">
			<header>Painel de Administração</header>
			<div class="listagem-curso notificar-usuario">Notificar usuário em relação a denúncia - Ana Paula Costa</div>
			<div class="listagem-curso notificar-usuario">Notificar usuário em relação a denúncia - José Santana</div>
			<div class="listagem-curso notificar-usuario">Notificar usuário em relação a denúncia - Bruno Gomes</div>
			<div class="listagem-curso notificar-usuario">Notificar usuário em relação a denúncia - Lorena Müller</div>
			<div class="listagem-curso notificar-usuario">Notificar usuário em relação a denúncia - Rafael Borges</div>
			<div class="listagem-curso notificar-usuario">Notificar usuário em relação a denúncia - Maria Silveira dos Santos</div>
			<div class="listagem-curso notificar-usuario">Notificar usuário em relação a denúncia - Leonardo Lima</div>
			<div class="listagem-curso notificar-usuario">Notificar usuário em relação a denúncia - Guilherme da Cruz Oliveira</div>
			<div class="listagem-curso notificar-usuario">Notificar usuário em relação a denúncia - Anna de la Frontera</div>
		</div>
		<div class="detalhe-denuncia">
			<header>Analisar Denúncia</header>
			<form>
				<input type="text" value="Nazismo/Fascismo" readonly>
				<input type="text" title="Usuário denunciado" value="José Santana" name="tipo" title="Tipo de denúncia" readonly />
				<textarea readonly  title="Descrição" class="form-element" name="desc" resizable="off">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, magni, doloremque! Dolor ab ipsum fugiat officia ut in asperiores, sapiente eligendi similique voluptatibus omnis distinctio. Ex reprehenderit praesentium voluptatibus libero!</textarea>
				<br><br>
				<div class="form-element-button remover-denuncia">Notificar e Remover</div>
				<div class="form-element-button notificar-denuncia">Notificar</div>
				<div class="form-element-button cancelar-conteudo">Cancelar</div>
			</form>
		</div>
	</section>
	<footer>
		<div><img class="footer-image" src="<?php echo $assets['images']?>theme/chess-white.png"></div>
	</footer>
</body>
</html>