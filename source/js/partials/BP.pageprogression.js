var BP = BP || {};

BP.Pageprogression = function($) {
	'use strict';

	var self = {},
		watch,
		element;

	self.init = function(opts) {
		element = opts.element;
		watch = opts.watch;

		$(window).scroll( function() { 
			self.Scroll();
		});
	};

	self.Scroll = function() {
		var $watchPos    = watch.offset().top,
		    $scrollTop   = $(document).scrollTop(),
		    $watchHeight = watch.height() - $(window).height(),

		    $a             = $scrollTop,
		    $b             = $watchPos,
		    $c             = $watchHeight,

		    Calculation   = ( ($a - $b) / $c ) * 100;

		// Add active class, removed when calculation => 0
		element.addClass('active');

		if ( Calculation <= 0 ) {
			Calculation = 0;
			element.removeClass('active');
		} if ( Calculation > 103 ) {
			element.removeClass('active');
		}

		console.log( Calculation );

		if ( Calculation > 99.5 ) {
			Calculation = 100;
		}

		element.find('span').css( 'width', Calculation + "%" );

	};

	return {
		init: self.init
	};

}(jQuery);