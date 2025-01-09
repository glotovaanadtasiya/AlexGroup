/* eslint-disable no-undef */
$(function() {
	

	// datepicker
	$(".js-datepicker").datepicker({
		language: "ru-RU",
		autoHide: true,
		startDate: Date.now(),
		// hide on input click
		trigger: $(".js-datepicker"),
		zIndex: "2000",
		date: null,
	});
  
  
});