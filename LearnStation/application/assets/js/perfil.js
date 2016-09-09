function carregarNotificacoes(){

	$dados = new Object();
		
	$.ajax({
		url: ( location.href + "/receberDenuncia"),			type: "post",
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

$(document).ready(function(event){

	carregarNotificacoes();

	$(".cc").click(function(){

		
		window.location.assign("../LearnStation/curso");
		
	});

	$(".cm").click(function(){

		
		window.location.replace("../LearnStation/cursoministrado");
	});

	$('.adicionar-curso-button').click(function(){
		$(document).scrollTop(0);
		$('.novo-curso').slideToggle();
	});

	$('.notificar-usuario').click(function(){
		notificar = $(this);
		$('.detalhe-denuncia').slideToggle();
	});

	$('.cancelar-conteudo').click(function(){
		$('.detalhe-denuncia').slideToggle();
	});

	$('.cancelar-aula').click(function(){
		$('.novo-curso').slideToggle();
	});

	$('.encerrar-conta-opcao').click(function(){
		$(window).scrollTop(0);
		$('.encerrar-conta').slideToggle();
	});

	$('.cancelar-encerrar').click(function(){
		$('.encerrar-conta').slideToggle();
	});

	$('.enviar-mensagem').click(function(){
		$(document).scrollTop(0);
		$('.conversa').slideToggle();
	});

	$('.cancelar-texto').click(function(){
		$('.conversa').slideToggle();
	});

	$('.cancelar-amizade').click(function(e){
		//Desativa o evento padrão do elemento
		e.preventDefault();
		$dados = new Object();

		
		$.ajax({
			url: ( location.href + "/cancelarAmizade"),
			type: "post",
			async: true,
			data: $dados,
			cache: false
		})
		.done(function(data){
			
			$('.message-cancelar-amizade').slideToggle();
			setTimeout(function(){
				$('.message-cancelar-amizade').slideToggle();
			}, 3500);

		})
		.fail(function(){
			console.log("pãã");
		});
	});

	$('.solicitar-amizade').click(function(e){
		//Desativa o evento padrão do elemento
		e.preventDefault();
		$dados = new Object();

		
		$.ajax({
			url: ( location.href + "/solicitarAmizade"),
			type: "post",
			async: true,
			data: $dados,
			cache: false
		})
		.done(function(data){
			
			$('.message-solicitar-amizade').slideToggle();
			setTimeout(function(){
				$('.message-solicitar-amizade').slideToggle();
			}, 3500);

		})
		.fail(function(){
			console.log("pãã");
		});
	});

	$('.add-aula').click(function(e){
		//Desativa o evento padrão do elemento
		e.preventDefault();
		$dados = new Object();

		
		$.ajax({
			url: ( location.href + "/adicionarCurso"),
			type: "post",
			async: true,
			data: $dados,
			cache: false
		})
		.done(function(data){
			
			$('.novo-curso').slideToggle();

			setTimeout(function(){
				$('.message-criar-curso').slideToggle();
			}, 2000);

			setTimeout(function(){
				$('.message-criar-curso').slideToggle();
			}, 3500);

		})
		.fail(function(){
			console.log("pãã");
		});
	});


	$('.confirmar-encerrar').click(function(e){
		//Desativa o evento padrão do elemento
		e.preventDefault();
		$dados = new Object();

		
		$.ajax({
			url: ( location.href + "/encerrarConta"),
			type: "post",
			async: true,
			data: $dados,
			cache: false
		})
		.done(function(data){
			
			$('.encerrar-conta').slideToggle();

			setTimeout(function(){
				$('.message-encerrar-conta').slideToggle();
			}, 2000);

			setTimeout(function(){
				$('.message-encerrar-conta').slideToggle();
			}, 3500);

			setTimeout(function(){
				window.location.assign("../LearnStation/");
			}, 10000);

		})
		.fail(function(){
			console.log("pãã");
		});
	});

	$('.enviar-texto').click(function(e){
		//Desativa o evento padrão do elemento
		e.preventDefault();
		$dados = new Object();

		
		$.ajax({
			url: ( location.href + "/enviarMensagem"),
			type: "post",
			async: true,
			data: $dados,
			cache: false
		})
		.done(function(data){
			
			$('.conversa').slideToggle();

			setTimeout(function(){
				$('.message-enviar-mensagem').slideToggle();
			}, 2000);

			setTimeout(function(){
				$('.message-enviar-mensagem').slideToggle();
			}, 3500);

		})
		.fail(function(){
			console.log("pãã");
		});
	});

	$('.notificar-denuncia').click(function(e){
		//Desativa o evento padrão do elemento
		e.preventDefault();
		$dados = new Object();

		var alvo = $(this);
				
		$.ajax({
			url: ( location.href + "/notificarUsuario"),
			type: "post",
			async: true,
			data: $dados,
			cache: false
		})
		.done(function(data){
			
			$('.detalhe-denuncia').slideToggle();

			$('.message-notificar-usuario').slideToggle();

			setTimeout(function(){
				$('.message-notificar-usuario').slideToggle();
			}, 3500);

			notificar.remove();

		})
		.fail(function(){
			console.log("pãã");
		});
	});

	$('.remover-denuncia').click(function(e){
		//Desativa o evento padrão do elemento
		e.preventDefault();
		$dados = new Object();

		var alvo = $(this);
				
		$.ajax({
			url: ( location.href + "/removerConteudo"),
			type: "post",
			async: true,
			data: $dados,
			cache: false
		})
		.done(function(data){
			
			$('.detalhe-denuncia').slideToggle();
			
			$('.message-remover-conteudo').slideToggle();

			setTimeout(function(){
				$('.message-remover-conteudo').slideToggle();
			}, 3500);

			notificar.remove();

		})
		.fail(function(){
			console.log("pãã");
		});
	});
});