var BP = BP || {};

BP.menutoggle = function($) {
	'use strict';

	var self = {},
		trigger,
		element;

	self.init = function(opts) {
		trigger = opts.trigger;
		element = opts.element;

		trigger.click(function(){
			self.FooBar();
		});
	};

	self.FooBar = function() {

		trigger.toggleClass('active');
		element.toggleClass('active');
		$('html').toggleClass('is-fixed');
		console.log("Foo");

	};

	return {
		init: self.init
	};

}(jQuery);