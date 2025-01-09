/* eslint-disable no-undef */
$(function() {


	// hotel map card tabs
	$(".js-map-card__tabs").on("click", ".js-map-card__tab-btn:not(.active)", function(e) {
		e.preventDefault();
		const roomType = $(this).data("number-type");
		$(this)
    .addClass('active').siblings().removeClass('active')
		.closest('.js-map-card__tabs').find('.js-hotel-card-tab-content').removeClass('active').eq($(this).index()).addClass('active')
		.find("img[data-src]").each(function(i, image) {
			image = $(image);
			image.attr("src", image.data("src"));
		});
		// change select value
		$(".js-roomtype-select").val(roomType).trigger("change");	
	});
	

	// Hide map card on scroll (mobile)
	$(window).scroll(function() {
		const st = $(window).scrollTop();
		const elementWrap = $('.js-s-map-cards-box'),
		element = $('.js-s-map-card.active'),
		canUserSeeIt = inViewport(elementWrap),
		mdBreakpoint = 767.98,
		windowWidth = $(window).outerWidth();
		if (elementWrap.length) {
			let elementWrapTop = elementWrap.offset().top,
			elementHeight = element.outerHeight(),
			translateY = -(st - elementWrapTop + elementHeight) - 200;
			if ((canUserSeeIt) && (windowWidth < mdBreakpoint) && (translateY < 0)) {
				element.css({'transform': 'translate3d(0, ' + translateY + 'px, 0)'});
			}
			else if (windowWidth > mdBreakpoint) {
				element.css({'transform': 'translate3d(0, 0, 0)'});
			}
		}
	});
	

	// activate map marker ways
	// click
	$(".js-map-marker:not(.active)").on("click touchstart", function() {
		// mouseenter touchstart events are removed

		// stop event bubbling
		// e.stopPropagation();
		const marker = $(this);
		const hotel = marker.data("hotel");
		activateMarker(hotel);
		$(".js-map-select").val(hotel).trigger("change");		
	});
	// change select on option hover
	$("body").on("mouseenter", ".select2-results__options .select2-results__option", function() {
		
		const option = $(this);
		const optionsList = option.closest(".select2-results__options");
		const optionsListId = optionsList.attr("id");

		// if it is hotel select
		if (optionsListId.includes("hotel-select")) {
			
			const optionId = option.attr("id");
			
			// split option by hyphen
			const optionIdSplitted = optionId.split("-");
			const optionValue  = optionIdSplitted[optionIdSplitted.length-1];
			$(".js-map-select").val(optionValue).trigger("change");
		}
	});

	// find room select -- activate map marker and select in booking popup
	$(".js-find-room").on("change", ".js-map-select", function(e) {
		e.preventDefault();
    const select = this;
		const selectValue = select.value;
		if (selectValue != "") {
			activateMarker(selectValue);
			$('.js-booking select[name="booking-hotel-select"]').val(selectValue).trigger('change');
		}    
	});
	// roomtype select -- activate necessary roomtype in map card and select in booking popup
	$(".js-find-room").on("change", ".js-roomtype-select", function(e) {
		e.preventDefault();
    const select = this;
		const selectValue = select.value;
		if (selectValue != "") {
			$(".js-map-card.active").find(".js-map-card__tab-btn").filter('[data-number-type="' + selectValue +'"]').click();
			$('.js-booking select[name="booking-roomtype-select"]').val(selectValue).trigger('change');
		}    
	});

	// time select -- select in booking popup
	$(".js-find-room").on("change", ".js-time-select", function(e) {
		e.preventDefault();
    const select = this;
		const selectValue = select.value;
		if (selectValue != "") {
			$('.js-booking select[name="booking-time-select"]').val(selectValue).trigger('change');
		}    
	});

	
	// Deactivate markers by clicking outside
	// $(document).on("click touchstart", function(e) {
	// 	let mapCardNotHideBlocks = $('.js-map-card, .js-find-room, .js-map');
	// 	if ((!mapCardNotHideBlocks.is(e.target) && mapCardNotHideBlocks.has(e.target).length === 0)) 
  //   {
	// 		mapCardNotHideBlocks.removeClass("active");			
	// 		deactivateMarkers();
	// 		$(".js-map-select").val("").trigger("change");
	// 	}
	// });
	$('.js-map-card__close').on("click touchstart", function() {
		let mapCards = $('.js-map-card');
		mapCards.removeClass("active");			
		deactivateMarkers();
		$(".js-map-select").val("").trigger("change");
  });
  
  // resize
	let resizeTimeout = null;
	$(window).on('resize', function () {
    resizeTimeout = setTimeout(function () {
		clearTimeout(resizeTimeout);
			drawMarkerLine();
		}, 500);
	});

  
  
});










// Activate map crystall
window.activateMarker = (hotel) => {

	// temporarily  hide map line
	$('.js-map-line').addClass("hidden");
	// deactivate all markers
	$('.js-map-marker').removeClass("active");
	$('.js-map-card').removeClass("active");
	// and activate the right marker
	$('.js-map-marker[data-hotel="' + hotel +'"]').addClass("active");
	$('.js-map-card[data-hotel="' + hotel + '"]').addClass("active");
	// lazy loading for images
	$('.js-map-card[data-hotel="' + hotel + '"]').find("img[data-src]").each(function(i, image) {
		image = $(image);
		image.attr("src", image.data("src"));
	});	
	$(".js-body").addClass("disable-stars-animation-edge");
	setTimeout(function() {		
		// show map line
		$('.js-map-line').removeClass("hidden");
		drawMarkerLine();
	}, 300);
	
}
// Draw line on map
window.drawMarkerLine = () => {
	let line = $('.js-map-line');
	let div1 = $('.js-map-marker.active');
	let div2 = $('.js-map-card.active');
	let offsetBlock = $(".js-map__inner");
	if (line.length && div1.length && div2.length && offsetBlock.length) {
		let offsetVertDistance = offsetBlock.offset().top;		
		let x1 = div1.offset().left + (div1.width()/2);
		let y1 = div1.offset().top + (div1.height()/2) - offsetVertDistance;
		let x2 = div2.offset().left + (div2.width()/2);
		let y2 = div2.offset().top + (div2.height()/2) - offsetVertDistance;

		line.attr('x1',x1).attr('y1',y1).attr('x2',x2).attr('y2',y2);
	}
}
// Deactivate Markers
window.deactivateMarkers = () => {
	// temporarily  hide map line
	$('.js-map-line').addClass("hidden");
	// deactivate all markers
	$('.js-map-marker').removeClass("active");
	// $('.js-map-card').removeClass("active");	
	$(".js-body").removeClass("disable-stars-animation-edge");
}


// Check if el is visible in viewport
window.inViewport = ($ele) => {
	let lBound = $(window).scrollTop(),
		uBound = lBound + $(window).height();
	if ($ele.length) {
		let	top = $ele.offset().top,
		bottom = top + $ele.outerHeight(true);
		return (top > lBound && top < uBound) ||
			(bottom > lBound && bottom < uBound) ||
			(lBound >= top && lBound <= bottom) ||
			(uBound >= top && uBound <= bottom);
	}
}
