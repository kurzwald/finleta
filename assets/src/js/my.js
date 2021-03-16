$(document).ready(function() {
    setTimeout(function () {
        $("#cube-loader").delay(400).fadeOut('slow');
    }, 1000);

});

// обработчик нажатия на сабмит

 (function($D){
	var button    = $D.querySelector('.request.submit'),
		desc = $D.querySelector('.request-desc'),
		form = $D.querySelector('.request-form'),
		title = $D.querySelector('.request-title');

	button.addEventListener('click', function(e){
		title.innerHTML = "Request successfully sent.";
		desc.innerHTML = "Thank you for your interest in Olynk. We will contact you short";
		form.outerHTML = "";
		event.preventDefault();
	});
})(document);
// обработчик нажатия на сабмит

// обработчик всплывающего меню
(function($D){
	var button = $D.querySelectorAll('[class*=branding_button]'),
	    request = $D.querySelector('.request');

	button.forEach(function(btn) {
		btn.addEventListener('click', function(e){


		var isrequest = window.open('tel:+375297697070') ;
		event.preventDefault();
	});
	})
})(document);
// обработчик всплывающего меню

