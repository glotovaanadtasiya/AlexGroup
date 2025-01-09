/* eslint-disable no-undef */
$(function() {
	
	let mfpCloseMarkup = '<button title="%title%" type="button" class="mfp-close"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="39" viewBox="0 0 22 39" stroke="#fff" fill="none"><path d="M1.00012 29.0625L11 19.375l9.9999 9.6875M20.9999 9.6875L11 19.375 1.00008 9.6875" stroke-width="2" stroke-linejoin="round"/></svg></button>'
	// booking
	$(".js-booking-link").magnificPopup({
		closeBtnInside:true,
		closeMarkup: mfpCloseMarkup,
		mainClass: "booking-popup",
		callbacks: {
			open: function() {				
				$('html').css('margin-right', 0);
			},
			close: function() {
				setTimeout(() => {
					$(".js-booking-link").blur();
				}, 1)
			}
		}		
	});

	$("body").on('click', '.mfp-close', function (e) {
		e.preventDefault();
		$.magnificPopup.close();
	});


	
	$('.js-rewards-carousel').each(function(index, carousel) { // the containers for all galleries
		$(carousel).magnificPopup({
				closeBtnInside:true,
				closeMarkup: mfpCloseMarkup,
				mainClass: 'rewards-popup',
				delegate: '.reward__fill-link', // the selector for gallery item
				type: 'image',
				tClose: "Закрыть (Esc)",
				gallery: {
					enabled:true
				},
				callbacks: {
					open: function() {
						$('html').css('margin-right', 0);
					},
				}
		});
	});
	
  //popup
  // $(".js-popup-form-link").click(function() {
	// 	$("#popup-form input[name='Форма']").val($(this).text());
	// }).magnificPopup({
	// 	closeBtnInside:true,
	// 	callbacks: {
	// 		open: function() {				
	// 			$('html').css('margin-right', 0);
	// 		}
	// 	}		
	// });
  
});


window.openSuccessPopup = () => {
	$.magnificPopup.open({
		closeBtnInside:true,
		closeMarkup: '<button title="%title%" type="button" class="mfp-close"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="39" viewBox="0 0 22 39" stroke="#fff" fill="none"><path d="M1.00012 29.0625L11 19.375l9.9999 9.6875M20.9999 9.6875L11 19.375 1.00008 9.6875" stroke-width="2" stroke-linejoin="round"/></svg></button>',
		mainClass: "booking-popup",
		items: {
			src: '.js-success-window' 
		},
		callbacks: {
			open: function() {				
				$('html').css('margin-right', 0);
			}
		}		
	});
}