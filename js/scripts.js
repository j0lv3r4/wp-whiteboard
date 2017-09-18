import $ from 'jquery';
import Popper from 'popper.js';

window.Popper = Popper;
window.jQuery = $;
require('bootstrap');

;(function($) {
	console.log($);
})(jQuery);
