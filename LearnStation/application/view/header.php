<header class="header-box">
	<div class="header-element-title">LearnStation</div>
	<div class="header-element-field">
		<form action="">
			<input class="pesquisa-campo" placeholder="Pesquise um curso ou usuário" type="text"/>
			<div class="pesquisa-resultado">
				
			</div>
		</form>
	</div>
	<div class="header-element-icon">
		<div title="Mensagens" class="message"></div>
		<div title="Notificações de amizade" class="friends"></div>
		<div title="Denunciar" class="exclamation"></div>
		<div title="Sair" class="logout"></div>
	</div>
</header>
<div class="nova-denuncia">
	<header>Denunciar conteúdo</header>
	<form>
		<input type="text" placeholder="Tipo de denúnica" name="tipo" title="Tipo de denúncia" />
		<textarea placeholder="Descrição" class="form-element" name="desc" resizable="off"></textarea>
		<div class="form-element-button add-denuncia">Enviar</div>
		<div class="form-element-button cancelar-denuncia">Cancelar</div>
	</form>
</div>
<div class="conversa-receber">
	<header>Receber mensagens</header>
	<form>
		<header title="Marcar como lida">Matheus Oliveira</header>
		<textarea name="conversa-receber" readonly>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis culpa laudantium aliquid dolorum libero illum dignissimos. Sit exercitationem sint laboriosam ipsa veritatis libero harum aliquam vitae saepe, nam ratione cupiditate.</textarea>
		<header>Luan Costa</header>
		<textarea title="Marcar como lida" name="conversa-receber" readonly>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur vero provident eum harum culpa dolore, magni ullam totam facilis cum modi autem repudiandae officia consectetur excepturi perspiciatis! Voluptates, accusantium, ipsa.</textarea>
		<div class="form-element-button sair-mensagem">Sair</div>
	</form>
</div>

<div class="solicitacao-amizade">
	<header>Solicitação de Amizade</header>
	<div class="request">
		<div class="nome">João Pedro Siqueira</div>
		<div class="form-element-button aceitar-amizade">Aceitar</div>
		<div class="form-element-button recusar-amizade">Recusar</div>
	</div>
	<div class="request">
		<div class="nome">Ana Luiza Costa</div>
		<div class="form-element-button aceitar-amizade">Aceitar</div>
		<div class="form-element-button recusar-amizade">Recusar</div>
	</div>
	<div class="request">
		<div class="nome">Paula Fernandez</div>
		<div class="form-element-button aceitar-amizade">Aceitar</div>
		<div class="form-element-button recusar-amizade">Recusar</div>
	</div>
	<br><br>
	<div class="form-element-button fechar-amizade">Fechar</div>
</div>
<div class="message-success message-recusa-amizade">Solicitação de amizade rejeitada com sucesso</div>
<div class="message-success message-nova-amizade">Solicitação de amizade aceita com sucesso</div>