/* eslint-disable no-undef */
$(function() {

	// burger menu
	$(".js-menu-opener").click(function() {
		$(".js-main-menu-nav, .js-menu-opener, .js-menu-opener__inner, .js-main-menu").toggleClass("active");
		$(".js-body").toggleClass("no-scroll");
	});
  
});