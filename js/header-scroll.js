jQuery(window).on('scroll', function(){
	console.log('It is running again');
	var scrollPosition = jQuery(this).offset();
	if (scrollPosition.top > 20){
		jQuery('.header').addClass('scrolled');
	} else {
		if (jQuery('.header').has('scrolled')){
			jQuery('.header').removeClass('scrolled');
		}
	}
});