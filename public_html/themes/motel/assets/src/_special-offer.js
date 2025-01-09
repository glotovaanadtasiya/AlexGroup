/* eslint-disable no-undef */
$(function() {

	// CURRENT SCROLL POSITION
  let currentScroll;
  currentScrollUpd();
  function currentScrollUpd() {
    currentScroll = $(window).scrollTop();
  }
  
	// resize
	let resizeTimeout = null;
	$(window).on('resize', function () {
		clearTimeout(resizeTimeout);
		resizeTimeout = setTimeout(function () {
			if (specialoffer.length) {
				specialofferBlocksUpd();
				specialofferBlocksPositionsUpd();
			}
		}, 500);
	});

	// Clone and insert offer block
	$(".js-special-offer-outer-clone").clone().appendTo( ".js-cloned-offer");
	makeSvgInline();
	// special offer scroll
	let specialoffer;
	let specialofferOuter;    
	specialofferBlocksUpd();
	function specialofferBlocksUpd() {
		specialoffer = $('.js-special-offer:visible');
		specialofferOuter = $('.js-special-offer-outer:visible');
	}
	
	let specialofferOuterTop;
	function specialofferBlocksPositionsUpd() {
		// $(window).scrollTop(0);
		specialofferOuterTop = specialofferOuter.offset().top;
		// $(window).scrollTop(currentScroll);
	}
	
	function specialofferScroll() {
		currentScrollUpd();  // get current position
		if (currentScroll > specialofferOuterTop) {
			specialoffer.addClass("fixed");
		}
		else {
			specialoffer.removeClass("fixed");
		}
	}
	if (specialoffer.length) { 
		specialofferBlocksPositionsUpd();
		// specialofferScroll();             
		$(window).on("scroll", function() {            
			specialofferScroll();            
		});
		$(window).trigger("scroll");  
	}
  
  
});

