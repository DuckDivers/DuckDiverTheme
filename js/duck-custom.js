(function($) {
"use strict";	
	$(document).ready(function() {	 // Document Ready
		$('.duck-lightbox').parent().addClass('image-popup-fit-width');

		$('.image-popup-fit-width').magnificPopup({
			type: 'image',
			closeOnContentClick: true,
			mainClass: 'mfp-fade',
			image: {
				verticalFit: false
			},
			zoom: {
			enabled: true,
			duration: 300, // don't foget to change the duration also in CSS
			}
			});
	});	 // End Document Ready
})( jQuery );