/*  ====================================
    Animation loop on Pageload
    ==================================== */

function Animation ($param) {
	var element  = $param,
	    trigger  = $param + "-end",
	    time     = 250;

	$( '.' + element).each(function(i) {

		var $this = $( this );

		setTimeout( function(){ 
			$this.addClass( trigger );
			// console.log( trigger + " added to " + element );
		}, time*i);


	});

}