$(document).ready(function(){
	/**
	 * Module: General
	 * Description: Navigation through ID's with smooth scrolling effect
	 */
	$('a[href*=\\#]:not([href=\\#])').click(function() {
		$('a').removeClass('selected');
		$(this).addClass('selected');
		  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
			  || location.hostname == this.hostname) {
	
			let target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
			  $('html,body').animate({
			  scrollTop: target.offset().top
			  }, 1000);
			  return false;
			}
		}
	});

	/**
	 * Module: General
	 * Description: Adding effect to open and close main navigation
	 */
	$('.main-header .btn-menu, .main-nav .btn-close').click(function(){
		if($('.main-nav').css("margin-left") == "0px"){
			$('.main-nav').animate({"margin-left": '-=300'});
		} else {
			$('.main-nav').animate({"margin-left": '+=300'});
		}
	});
	
	/**
	 * Module: Home
	 * Description: Owl carousel config for departamentos section
	 */
	$('.owl-carousel.departamentos').owlCarousel({
		items: 1,
		loop: true,
		mouseDrag: false,
		nav: true,
		dots: false,
		navText : ["<a class='btn-left'>left</a>","<a class='btn-right'>right</a>"]
	});

	/**
	 * Module: Home
	 * Description: Owl carousel config for amenidades section
	 */
	$('.owl-carousel.amenidades').owlCarousel({
		nav: true,
		navText : ["<a class='btn-left'>left</a>","<a class='btn-right'>right</a>"],
		items: 3,
		loop: true,
		mouseDrag: false,
		dots: true,
		responsive: {
			320: {
				items: 2
			},
			600: {
				items: 3
			}
		}
	});

	/**
	 * Module: Home
	 * Description: Inicializing parallax effects
	 */
	$("[data-paroller-factor]").paroller();

});