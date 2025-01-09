/* eslint-disable no-undef */
$(function() {


	// animate moon on scroll and other elements, if you need
	const animationElements = $(".js-moon");
	$(window).on('scroll resize', function() {
		checkIfInView(animationElements);
	});
	$(window).trigger('scroll');
  
  
});

// Add animate class (in-view) on scroll
function checkIfInView($animationElements) {
  const windowHeight = $(window).height();
  const windowTopPosition = $(window).scrollTop();
  const windowBottomPosition = (windowTopPosition + windowHeight);

  $.each($animationElements, function() {
		const $element = $(this);
    const elementHeight = $element.outerHeight();
    const elementTopPosition = $element.offset().top;
    const elementBottomPosition = (elementTopPosition + elementHeight);

    // Check to see if this current container is within viewport
    if ((elementBottomPosition >= windowTopPosition) &&
        (elementTopPosition <= windowBottomPosition)) {
      $element.addClass('in-view');
    } else {
			// Del animate class when element is out of screen
      // $element.removeClass('in-view');
    }
	});
}