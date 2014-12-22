/*  ====================================
    Animation loop on Pageload
    ==================================== */

function Animation (argument) {
	var target   = 'fade-animation',
	    trigger  = 'fade-animation-end',
	    time     = 150;

	$( '.' + target ).each(function(i) {

		var $this = $( this );

		setTimeout( function(){ 
			$this.addClass( trigger );
		}, time*i);


	});

}