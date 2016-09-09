$(document).ready(function(){


	$('.efetuar-inscricao').click(function(e){
		//Desativa o evento padrão do elemento
		e.preventDefault();
		$dados = new Object();

		
		$.ajax({
			url: ( location.href + "/efetuarInscricao"),
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

			setTimeout(function(){
				window.location.assign("../LearnStation/");
			}, 5000);

		})
		.fail(function(){
			console.log("pãã");
		});
	});
});