/* eslint-disable no-undef */
$(function() {
  
  let masonryBreakpoint = 1200;

  $(".js-hotel-cards").on("click", ".js-hotel-card-spoiler", function(){
    let spoiler = $(this);
    let block = spoiler.closest(".js-hotel-card-details");
    let slideContent = block.find(".js-hotel-card-list")
    spoiler.toggleClass("active");
    slideContent.toggleClass("active");
    // .slideToggle();
    if (window.outerWidth >= masonryBreakpoint) {
      $hotelCards.masonry();
    }
    else {
      // $hotelCards.trigger("changed.owl.carousel");
    }
  });



  
  //hotel cards on blog page
  let $hotelCards =	$('.js-hotel-cards');

  //initialize hotel cards (based on screen size)
	hotelCardsInit();
	function hotelCardsInit() {
		var checkWidth = $(window).width();
		if (checkWidth >= masonryBreakpoint) {
			if(typeof $hotelCards.data('owl.carousel') != 'undefined'){
				$hotelCards.data('owl.carousel').destroy(); 
			}
      $hotelCards.removeClass('owl-carousel');
      
      $hotelCards.masonry({
        itemSelector: '.hotel-cards-box__item',
        columnWidth: '.hotel-cards-box__item',
        gutter: 20,
        horizontalOrder: true,
      });
		} 
		else {
      let $hasMasonry = $hotelCards.data('masonry') ? true : false;
      if ($hotelCards.length > 0 && $hasMasonry) {
        $hotelCards.masonry('destroy');
        $hotelCards.removeData('masonry');
      }

			$hotelCards.addClass('owl-carousel');
		
			$hotelCards.on({
				'initialized.owl.carousel': function (event) {
					makeSvgInline();
				}
			}).owlCarousel({
				dots: true,
				nav: false,
				// autoHeight: true,
				autoplay: true,
        autoplayTimeout: 10000,
        autoplayHoverPause: true,
        autoWidth: true,
				items: 1,
        loop: true,
        // rewind: true,
				responsive:{
					0:{
						items: 1,	
            center: true,	
            autoWidth: false,
          },
          576: {
            items: 3,
            center: true,
            margin: 23,
          },
          950:{
            items: 5,
						center: true,
						margin: 23,		
          }
				}
			});
		}
	}
	$(window).resize(hotelCardsInit);	
  
});