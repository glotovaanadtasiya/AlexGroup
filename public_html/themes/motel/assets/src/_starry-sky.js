/* eslint-disable no-undef */
$(function() {


	// sky
	// Starry skies
	const starrySkies = $('.js-starry-sky');
	makeStarrySkies(starrySkies);
  
  
});


// Starry skies
function makeStarrySkies(starrySkies) {
	starrySkies.each(function() {
		const sky = $(this);
		const starsAmount = parseInt(sky.data("stars-amount"), 10);
		const sizeMultiplier = 20;
		
		for (let i = 0 ; i < starsAmount ; i++ ) {
			let commonRandom = Math.random();
			const s = $('<div class="star-blink"><div class="star-blink__inner"></div></div>');
			s.css({
				'top': Math.random() * 100 + '%',
				'left': Math.random() * 100 + '%',
				'animation-delay': Math.random() * starsAmount + 's',
				'width': commonRandom * 2 + sizeMultiplier + 'px',
				'height': commonRandom * 2 + sizeMultiplier + 'px',
				'opacity': Math.random() * 5 / 10 + 0.5
			});
			// if (i % 8 === 0) {
			// 	s.addClass('red');
			// } else if (i % 10 === 6) {
			// 	s.addClass('blue');
			// }
			sky.append(s);
		}
	});
}