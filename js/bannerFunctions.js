$(document).ready(function() {

responsiveImages();
	

$(window).resize(responsiveImages);

});

function responsiveImages(){

var modelos = $(".banner-modelos").attr('class');
	var ukdesign = $(".banner-ukdesign").attr('class');
	var historia = $(".banner-historia").attr('class');
	var lifestyle = $(".banner-lifestyle").attr('class');
	var promociones = $(".banner-promociones").attr('class');
	var cotizar = $(".banner-cotizar").attr('class');
	var testimoniales = $(".banner-testimoniales").attr('class');
	var noticias = $(".banner-noticias").attr('class');
	
	imgRandon(modelos, 'modelos');
	imgRandon(ukdesign, 'ukdesign');
	imgRandon(historia, 'historia');
	imgRandon(lifestyle, 'lifestyle');
	imgRandon(promociones, 'promociones');
	imgRandon(cotizar, 'cotizar');
	imgRandon(testimoniales, 'testimoniales');
	imgRandon(noticias, 'noticias');

}

function imgRandon(div, ruta) {

if ($(window).width() <= 768  && $(window).width() > 480){
//your code
var ale = Math.floor((Math.random()*5)+1);
	console.log(ale - 1);
	$.get('modulos/random.php', { nAle : ale - 1 } , function(data) {
		$('.' + div + " img").attr('src', 'images/bannerhome/mobile/tablet/' + ruta + '/' + data.img);
		$('.' + div + " div img").attr('src', 'images/bannerhome/mobile/tablet/' + ruta + '/' + data.imghover);
	}, 'json');

}else if($(window).width() <= 480){

var ale = Math.floor((Math.random()*5)+1);
	console.log(ale - 1);
	$.get('modulos/random.php', { nAle : ale - 1 } , function(data) {
		$('.' + div + " img").attr('src', 'images/bannerhome/mobile/smart/' + ruta + '/' + data.img);
		$('.' + div + " div img").attr('src', 'images/bannerhome/mobile/smart/' + ruta + '/' + data.imghover);
	}, 'json');

}else{

var ale = Math.floor((Math.random()*5)+1);
	console.log(ale - 1);
	$.get('modulos/random.php', { nAle : ale - 1 } , function(data) {
		$('.' + div + " img").attr('src', 'images/bannerhome/' + ruta + '/' + data.img);
		$('.' + div + " div img").attr('src', 'images/bannerhome/' + ruta + '/' + data.imghover);
	}, 'json');

}


}







	