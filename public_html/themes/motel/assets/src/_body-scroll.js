/* eslint-disable no-undef */
$(function() {
	
	
	// add class to body when window is on scroll
	$(window).scroll(function() {
		clearTimeout($.data(this, 'scrollTimer'));
		$(".js-body").addClass("scrolling");
		$.data(this, 'scrollTimer', setTimeout(function() {
			// do something
			// if haven't scrolled in 250ms
			$(".js-body").removeClass("scrolling");
		}, 250));
	});
  
  
});