$(document).ready(function(){

	$(".remover-aula-button").click(function(e){

		$(this).prev().remove();
		$(this).remove(); 

		e.preventDefault();
		$dados = new Object();

		//console.log(location.href);
		$.ajax({
			url: ( location.href + "/removerAula"),
			type: "post",
			async: true,
			data: $dados,
			cache: false
		})
		.done(function(data){
			
			$('.message-remover-aula').slideToggle();
			setTimeout(function(){
				$('.message-remover-aula').slideToggle();
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

		//console.log(location.href);
		$.ajax({
			url: ( location.href + "/adicionarAula"),
			type: "post",
			async: true,
			data: $dados,
			cache: false
		})
		.done(function(data){
			
			$('.message-add-aula').slideToggle();
			setTimeout(function(){
				$('.message-add-aula').slideToggle();
			}, 3500);

		})
		.fail(function(){
			console.log("pãã");
		});

		
	});

	$('.aula').click(function(){

		window.location.assign("../LearnStation/aula");
	});

});