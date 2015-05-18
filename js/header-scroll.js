jQuery(window).on('scroll', function(){
	if (jQuery(this).offset() > 20){
		jQuery('.header').addClass('scrolled');
	} else {
		if (jQuery('.header').has('scrolled')){
			jQuery('.header').removeClass('scrolled');
		}
	}
});