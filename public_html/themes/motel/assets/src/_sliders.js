/* eslint-disable no-undef */
$(function() {


	// slider arrows
	const sliderArrows = [
		'<svg width="13" height="28" viewBox="0 0 13 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 1L1 14L12 27" stroke="white" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
		'<svg width="13" height="28" viewBox="0 0 13 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 27L12 14L1 1" stroke="white" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>'
	]

	// 
	// Sliders init START
	// 
	$(".js-photo-slider").each(function(index, carousel) {
		carousel = $(carousel);
		carousel.owlCarousel({
			dots: false,
			nav: true,
			autoHeight: true,
			lazyLoad: true,
			lazyLoadEager: 3,
			items: 1,
			loop: true,
			navText: sliderArrows,
			responsive:{
				0:{
					dots: !!(parseInt(carousel.data("mobileDots"), 10)),
				},
				991:{
					dots: !!(parseInt(carousel.data("desktopDots"), 10)),
				},
			}
		});
	})

	$(".js-reviews-carousel").owlCarousel({
		dots: false,
		nav: true,
		// autoHeight: true,
		items: 1,
		loop: true,
		navText: sliderArrows,
		responsive:{
			0:{
				autoWidth: true,
				nav: false,		
				margin: 25,
			},
			767:{

			}
		}
	});

	$(".js-news-prev-carousel").owlCarousel({
		dots: false,
		nav: true,
		// autoHeight: true,
		items: 1,
		loop: true,
		lazyLoad: true,
		lazyLoadEager: 3,
		navText: sliderArrows,
		responsive:{
			0:{
				autoWidth: true,
				nav: false,		
				margin: 23,
				items: 2,
			},
			767:{
				items: 3,
				nav: false,
				margin: 44,
			},
			991: {
				items: 3,
				nav: false,
				margin: 21,
			},
			1199:{
				items: 3,
				margin: 102,
			},
		}
	});

	$(".js-hotel-prev-carousel").each(function(index, carousel) {
		carousel = $(carousel);
		carousel.owlCarousel({
			dots: false,
			nav: true,
			// autoHeight: true,
			items: 1,
			loop: true,
			lazyLoad: true,
			lazyLoadEager: 2,
			navText: sliderArrows,
			responsive:{
				0:{
					autoWidth: true,
					nav: false,		
					margin: 30,
					items: 3,
					center: true,
				},
				767:{
					autoWidth: true,
					items: 3,
					nav: false,
					margin: 15,
					center: true,
				},
				991: {
					items: 2,
					margin: 23,
				}
			}
		});
	});

	$(".js-rooms-carousel").each(function(index, carousel) {
		carousel = $(carousel);
		carousel.owlCarousel({
			dots: true,
			nav: true,
			items: 2,
			loop: true,
			navText: sliderArrows,
			margin: 20,
			responsive:{
				0:{
					autoWidth: true,
					nav: false,		
					margin: 30,
					items: 3,
					center: true,
					dots: false,
				},
				576:{
					items: 2,
				},
			}
		});
	});

	
  //workers
  let $workersCarousel =	$('.js-workers');

	//initialize hotel cards (based on screen size)
	workersCarouselInit();
	function workersCarouselInit() {
		var checkWidth = $(window).width();
		if (checkWidth >= 768) {
			if(typeof $workersCarousel.data('owl.carousel') != 'undefined'){
				$workersCarousel.data('owl.carousel').destroy(); 
			}
      $workersCarousel.removeClass('owl-carousel');
		} 
		else {
			$workersCarousel.addClass('owl-carousel');
		
			$workersCarousel.on({
				'initialized.owl.carousel': function (event) {
					makeSvgInline();
				}
			}).owlCarousel({
				dots: false,
				nav: false,
				// autoHeight: true,
        autoWidth: true,
				items: 1,
				loop: false,
				margin: 20
        // rewind: true,
			});
		}
	}
	$(window).resize(workersCarouselInit);	

	
	
	// rewards carousel
	$(".js-rewards-carousel").each(function(index, carousel) {
		carousel = $(carousel);
		carousel.owlCarousel({
			dots: false,
			nav: true,
			// autoHeight: true,
			items: 2,
			loop: false,
			navText: sliderArrows,
			margin: 23,
			responsive:{
				0:{
					autoWidth: true,
					nav: false,
					margin: 23,
				},
				767:{
					items: 2,
					margin: 15,
				},
				991: {
					items: 2,
					margin: 23,
				}
			}
		});
	});	
	// 
	// Sliders init END
	// 
  
  
});