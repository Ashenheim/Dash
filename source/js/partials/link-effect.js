$(document).ready(function() {

	var element = $('.entry p a');

	element.each(function (index) {
		var characters = $(this).text().split("");

		$this = $(this);
		$this.empty();
		$.each(characters, function (i, el) {
			$this.append("<span>" + el + "</span>");
		});

	});

	element.hover( function(e) {
		var time = 50;


		$(this).find('span').each(function(i) {
			var $this = $( this );

			setTimeout( function() {
				$this.stop().addClass('active');
			}, time*i);

		});
		
	}, function(e) {
		$(this).find('span').removeClass('active');
	});

});