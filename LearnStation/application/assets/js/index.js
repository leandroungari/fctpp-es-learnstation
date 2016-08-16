$(document).ready(function(){

	loadBackground("section");

});

function loadBackground(element){


	var hour = new Date().getHours();
	var background;

	if(hour < 7 || hour >= 20){
		background = "bridge.jpg";
	}
	else if(hour >= 14 && hour < 18){
		background = "street.jpg";
	}
	else if(hour >= 18 && hour < 20){
		background = "sun.jpg";
	}
	else if(hour >= 7 && hour < 10){
		background = "mountain.jpg";
	}
	else if(hour >= 10 && hour < 12){
		background = "city.jpg";
	}
	else{
		background = "crossroads.jpg";
	}

	$(element).css("background-image", "url('./application/assets/css/images/" + background + "')");

}