$(document).ready(function(){


	$('.entrar-login').click(function(e){

		//Desativa o evento padrão do elemento
		e.preventDefault();
		$dados = new Object();

		
		$.ajax({
			url: (  location.href + "/login"),
			type: "post",
			async: true,
			data: $dados,
			cache: false
		})
		.done(function(data){
			
			window.location.assign("../LearnStation/perfil");

		})
		.fail(function(){
			console.log("pãã");
		});

	});
});