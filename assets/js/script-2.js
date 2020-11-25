(function($) {
	
	"use strict";
	
	
	// Single Item Carousel
	if ($('.project-slider').length) {
		$('.project-slider').owlCarousel({
			loop:true,
			margin:0,
			nav:true,
			smartSpeed: 1800,
			autoplay: 9000,
			autoHeight: false,
			navText: [ '<span class="fa fa-arrow-left"></span>', '<span class="fa fa-arrow-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:1
				},
				1024:{
					items:1
				}
			}
		});    		
	}
	
	// Single Item Carousel
	if ($('.latest-news-h5-slider').length) {
		$('.latest-news-h5-slider').owlCarousel({
			loop:true,
			margin:30,
			nav:true,
			smartSpeed: 1800,
			autoplay: 9000,
			autoHeight: false,
			navText: [ '<span class="fa fa-arrow-left"></span>', '<span class="fa fa-arrow-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				1024:{
					items:2
				},
				1224:{
					items:3
				}
			}
		});    		
	}	
	
	// clints carousel
	if ($('.clints-carousel').length) {
		$('.clints-carousel').owlCarousel({
			loop:true,
			margin:30,
			nav:true,
			smartSpeed: 1800,
			autoplay: 9000,
			autoHeight: false,
			navText: [ '<span class="fa fa-arrow-left"></span>', '<span class="fa fa-arrow-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				800:{
					items:3
				},
				1024:{
					items:4
				}
			}
		});    		
	}

	if ($('.testimonials-h5 .bxslider').length) {
		$('.testimonials-h5 .bxslider').bxSlider({
			nextSelector: '.testimonials-h5 #slider-next',
			prevSelector: '.testimonials-h5 #slider-prev',
			nextText: '<i class="fa fa-arrow-right"></i>',
			prevText: '<i class="fa fa-arrow-left"></i>',
			mode: 'fade',
			auto: 'true',
			speed: '700',
			pagerCustom: '.testimonials-h5 .slider-pager .thumb-box'
		});
	};
	

/* ==========================================================================
   When document is Scrollig, do
   ========================================================================== */
	
	$(window).on('scroll', function() {
		
	});
	
/* ==========================================================================
   When document is loading, do
   ========================================================================== */
	
	$(window).on('load', function() {
		
	});	

})(window.jQuery);