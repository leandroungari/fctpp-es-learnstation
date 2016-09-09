$(document).ready(function(){

	$('.aula').click(function(){

		window.location.assign("../LearnStation/aula");
	});

	$('.solicitar-inscricao').click(function(e){

		//Desativa o evento padrão do elemento
		e.preventDefault();
		$dados = new Object();

		
		$.ajax({
			url: ( location.href + "/inscreverUsuario"),
			type: "post",
			async: true,
			data: $dados,
			cache: false
		})
		.done(function(data){
			
			$('.message-efetuar-inscricao').slideToggle();
			setTimeout(function(){
				$('.message-efetuar-inscricao').slideToggle();
			}, 3500);

		})
		.fail(function(){
			console.log("pãã");
		});
	});

	$('.avaliar-curso').click(function(e){
		//Desativa o evento padrão do elemento
		e.preventDefault();
		$dados = new Object();

		
		$.ajax({
			url: ( location.href + "/avaliarCurso"),
			type: "post",
			async: true,
			data: $dados,
			cache: false
		})
		.done(function(data){
			
			$('.message-avaliar-curso').slideToggle();
			setTimeout(function(){
				$('.message-avaliar-curso').slideToggle();
			}, 3500);

		})
		.fail(function(){
			console.log("pãã");
		});
	});

	$('.cancelar-inscricao').click(function(e){
		//Desativa o evento padrão do elemento
		e.preventDefault();
		$dados = new Object();

		
		$.ajax({
			url: ( location.href + "/cancelarInscricao"),
			type: "post",
			async: true,
			data: $dados,
			cache: false
		})
		.done(function(data){
			
			$('.message-cancelar-inscricao').slideToggle();
			setTimeout(function(){
				$('.message-cancelar-inscricao').slideToggle();
			}, 3500);

		})
		.fail(function(){
			console.log("pãã");
		});
	});
});