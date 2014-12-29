$('html').removeClass('no-js').addClass('js');

$(document).ready(function($) {

	/* ------------------------------
		Initiations
	------------------------------ */

	BP.menutoggle.init({
		trigger: $('#Hamburger'),
		element: $('ul[role="navigation"].mobile-nav')
	});

	/* ------------------------------
		On load functions
	------------------------------ */
	
	Animation('animation_fade');
	Animation('animation_slide');

	pageScroll();

});