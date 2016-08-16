$(document).ready(function(){
	
	makeBorder(".footer-image", "#888", "#fff");

});

function makeBorder(afterElement, colorPrimary, colorSecondary){

	element = "<svg width='100%' height='30px'><path fill="+ colorPrimary+" d='M 0,0 L ";

	var width = $(document).width();
	var pass = width/24;

	for(i = 1; i*pass <= width; i++){

		element += i*pass + ',' + (i%2==0 ? 0 : 30) + " ";
	}

	element += "'></path><path fill="+ colorSecondary+" d='M 0,0 L ";

	for(i = 1; i*pass <= width; i++){

		element += i*pass + ',' + (i%2==0 ? 0 : 20) + " ";
	}


	element += "'></path></svg>"

	$(afterElement).before(element);
}	

