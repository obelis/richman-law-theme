jQuery(window).on('scroll', function(){
	var scrollPosition = jQuery('.header').offset();
	var scrolledActive = 100;
	if (scrollPosition.top > scrolledActive){
		jQuery('.header').addClass('scrolled');

	} else {
		if (jQuery('.header').has('scrolled')){
			jQuery('.header').removeClass('scrolled');
		}

	}
});


