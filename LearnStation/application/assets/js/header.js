$(document).ready(function(){


	$('.exclamation').click(function(){
		$('.nova-denuncia').slideToggle();
		$(document).scrollTop();
	});

	$('.cancelar-denuncia').click(function(){
		$('.nova-denuncia').slideToggle();
	});

	$('.friends').click(function(){
		$('.solicitacao-amizade').slideToggle();
		$(document).scrollTop();
	});

	$('.fechar-amizade').click(function(){
		$('.solicitacao-amizade').slideToggle();
	});

	$('.message').click(function(e){

		//Desativa o evento padrão do elemento
		e.preventDefault();
		$dados = new Object();

		
		$.ajax({
			url: ( "../LearnStation/perfil/receberMensagem"),
			type: "post",
			async: true,
			data: $dados,
			cache: false
		})
		.done(function(data){
			

		})
		.fail(function(){
			console.log("pãã");
		});

		$('.conversa-receber').slideToggle();
	});

	$('.sair-mensagem').click(function(){
		$('.conversa-receber').slideToggle();
	});

	$(".conversa-receber > form > header").click(function(){

		$(this).next().remove();
		$(this).remove();
	});

	$('.add-denuncia').click(function(e){

		//Desativa o evento padrão do elemento
		e.preventDefault();
		$dados = new Object();

		
		$.ajax({
			url: ( "../LearnStation/perfil/adicionarDenuncia"),
			type: "post",
			async: true,
			data: $dados,
			cache: false
		})
		.done(function(data){
			
			$('.nova-denuncia').slideToggle();

			setTimeout(function(){
				$('.message-nova-denuncia').slideToggle();
			}, 2000);

			setTimeout(function(){
				$('.message-nova-denuncia').slideToggle();
			}, 3500);

		})
		.fail(function(){
			console.log("pãã");
		});
	});

	$('.aceitar-amizade').click(function(e){

		//Desativa o evento padrão do elemento
		e.preventDefault();
		$dados = new Object();

		var alvo = $(this);

		$.ajax({
			url: ( "../LearnStation/perfil/aceitarAmizade"),
			type: "post",
			async: true,
			data: $dados,
			cache: false
		})
		.done(function(data){

			alvo.parent().remove();

			$('.message-nova-amizade').slideToggle();

			setTimeout(function(){
				$('.message-nova-amizade').slideToggle();
			}, 2000);

		})
		.fail(function(){
			console.log("pãã");
		});
	});

	$('.recusar-amizade').click(function(e){

		//Desativa o evento padrão do elemento
		e.preventDefault();
		$dados = new Object();

		var alvo = $(this);

		$.ajax({
			url: ( "../LearnStation/perfil/recusarAmizade"),
			type: "post",
			async: true,
			data: $dados,
			cache: false
		})
		.done(function(data){

			alvo.parent().remove();

			$('.message-recusa-amizade').slideToggle();

			setTimeout(function(){
				$('.message-recusa-amizade').slideToggle();
			}, 2000);

		})
		.fail(function(){
			console.log("pãã");
		});
	});

	$('.logout').click(function(e){

		//Desativa o evento padrão do elemento
		e.preventDefault();
		$dados = new Object();

		
		$.ajax({
			url: ( "../LearnStation/perfil/logout"),
			type: "post",
			async: true,
			data: $dados,
			cache: false
		})
		.done(function(data){
			
			window.location.assign("../LearnStation/");

		})
		.fail(function(){
			console.log("pãã");
		});
	});

	$('.pesquisa-campo').keyup(function(e){

		e.preventDefault();
		var texto = $('.pesquisa-campo').val();

		if(texto.length >= 4){

			$('.pesquisa-resultado').slideDown();

			//Desativa o evento padrão do elemento
			$dados = new Object();

			
			$.ajax({
				url: ( "../LearnStation/perfil/pesquisar"),
				type: "post",
				async: true,
				data: $dados,
				cache: false
			})
			.done(function(data){
				

			})
			.fail(function(){
				console.log("pãã");
			});


		}
		else{
			$('.pesquisa-resultado').slideUp();
		}

	});
});