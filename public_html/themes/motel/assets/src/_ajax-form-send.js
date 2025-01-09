/* eslint-disable no-undef */
$(function() {

  //E-mail Ajax Send
	//Documentation & Example: https://github.com/agragregra/uniMail
	$(".js-form-send").submit(function() {
		let th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", 
			data: th.serialize()
		}).done(function() {
			alert("Спасибо за Вашу заявку!");
			setTimeout(function() {				
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});
  
});