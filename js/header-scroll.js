jQuery(window).on('scroll', function(){
	console.log('RUN');
	var scrollPosition = jQuery('.header').offset();
	if (scrollPosition.top > 20){
		jQuery('.header').addClass('scrolled');
	} else {
		if (jQuery('.header').has('scrolled')){
			jQuery('.header').removeClass('scrolled');
		}
	}
});