	(function ($) {
		$(document).ready(function () {
			$(".banner-slider.owl-carousel").owlCarousel({
				loop: true,
				nav: true,
				dots: true,
				items: 1,
				margin: 0,
				// autoplay: true,
				autoWidth: true,
				responsive: {
					480: {
						items: 1
					}, // from zero to 480 screen width 4 items
					768: {
						items: 1
					}, // from 480 screen widthto 768 6 items
					1024: {
						items: 1 // from 768 screen width to 1024 8 items
					}
				},
				navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa fa-chevron-right" aria-hidden="true"></i>']
			});
			// new arrival products-slider
			$(".new-arrival-slider.owl-carousel").owlCarousel({
				nav: true,
				dots: true,
				items: 4,
				margin: 20,
				// autoplay: true,
				responsive: {
					480: {
						items: 1
					}, // from zero to 480 screen width 4 items
					768: {
						items: 2
					}, // from 480 screen widthto 768 6 items
					1024: {
						items: 4 // from 768 screen width to 1024 8 items
					}
				},
				navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa fa-chevron-right" aria-hidden="true"></i>']
			});
			// Top sellers products-slider
			$(".top-seller-slider.owl-carousel").owlCarousel({
				nav: true,
				dots: true,
				items: 4,
				margin: 20,
				// autoplay: true,
				responsive: {
					480: {
						items: 1
					}, // from zero to 480 screen width 4 items
					768: {
						items: 2
					}, // from 480 screen widthto 768 6 items
					1024: {
						items: 4 // from 768 screen width to 1024 8 items
					}
				},
				navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa fa-chevron-right" aria-hidden="true"></i>']
			});
		});
	})(jQuery);
