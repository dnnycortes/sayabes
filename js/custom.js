$(document).ready(function(){
	/**
	 * Navegación por medio de id's con animación
	 */
	$('a[href*=\\#]:not([href=\\#])').click(function() {
		$('a').removeClass('selected');
		$(this).addClass('selected');
    	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
       		|| location.hostname == this.hostname) {

		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      	if (target.length) {
       		$('html,body').animate({
       		scrollTop: 200
       		}, 1500);
       		return false;
    		}
		}
	});

});