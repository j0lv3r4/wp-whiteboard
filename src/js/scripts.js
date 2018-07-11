// global.$ = global.jQuery = require('jquery');
global.$ = window.jQuery;
global.Popper = require('popper.js');

require('bootstrap');

;(function($) {
	console.log($);
})(jQuery);
