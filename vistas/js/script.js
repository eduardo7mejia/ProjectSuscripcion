/*=============================================
ANIMACIONES SCROLL HEADER
=============================================*/

$(window).scroll(function(){

	var posY = window.pageYOffset;
	
	if(posY > 10){

		$("header").css({"background":"#7E202C", "transition":".3s all"})


	}else{

		$("header").css({"background":"rgba(0,0,0,.1)", "transition":".3s all"})

	}

})

/*=============================================
MENÚ MÓVIL
=============================================*/

$(".logotipo .fa-bars").click(function(){

	$(".menuMovil").show("fast");

})

$(".menuMovil ul li .fa-times").click(function(){

	$(".menuMovil").hide("fast");

})

/*=============================================
CURSOS
=============================================*/

var videos = $(".cursos video");

$(".cursos video").click(function(){

	for(var i = 0; i < videos.length; i++){

		$(videos[i])[0].pause();

	}

	$(this).attr("controls",true)
	$(this)[0].play();

})

/*=============================================
FAQ
=============================================*/

var listaPreguntas = $(".faq ul li.nav-item");

$(".faq ul li.nav-item").click(function(){

	var respuesta = $(this).attr("respuesta");

	for(var i = 0; i < listaPreguntas.length; i++){

		$(listaPreguntas[i]).removeClass("bg-light");

		$(listaPreguntas[i]).children("a").children("i").removeClass("fa-chevron-left");

		$(listaPreguntas[i]).children("a").children("i").addClass("fa-chevron-right");
	
	}

	$(this).addClass("bg-light");

	$(this).children("a").children("i").removeClass("fa-chevron-right");

	$(this).children("a").children("i").addClass("fa-chevron-left");

	$(".respuestas p").html(respuesta);

})

/*=============================================
DESPLAZAMIENTO MENÚ
=============================================*/

if(window.matchMedia("(max-width:768px)").matches){

	$(".menuMovil ul li a").click(function(e){

		$(".menuMovil").slideToggle('fast');

		e.preventDefault();

		var vinculo = $(this).attr("href");

		$("html, body").animate({

			scrollTop: $(vinculo).offset().top - 60

		}, 2000, "easeOutQuint")

	})


}else{

	$(".botonera ul li a").click(function(e){

		e.preventDefault();

		var vinculo = $(this).attr("href");

		$("html, body").animate({

			scrollTop: $(vinculo).offset().top - 60

		}, 2000, "easeOutQuint")

	})

}


/*=============================================
SCROLL UP
=============================================*/

$.scrollUp({
	scrollText:"",
	scrollSpeed: 2000,
	easingType: "easeOutQuint"
})

/*=============================================
PRELOAD
=============================================*/
var incremento = 0;

$("body").css({"overflow-y":"hidden"});

$('body').nitePreload({
	srcAttr: 'data-nite-src',
	onProgress: function(a) {

		incremento = Math.floor(a.percentage);

		$("#porcentajeCarga").html(incremento+"%");

		$("#rellenoCarga").css({"width":incremento+"%"})

		if(incremento >= 100){

			$("#preload").delay(350).fadeOut("slow");
			$("body").delay(350).css({"overflow-y":"scroll"})

		}
	
	}
});