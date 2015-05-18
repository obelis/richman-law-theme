jQuery(window).on('scroll', function(){
	var scrollPosition = jQuery('.header').offset();
	var scrolledActive = jQuery('.page-intro').outerHeight(true);
	if (scrollPosition.top > acrolledActive){
		jQuery('.header').addClass('scrolled');
		if (jQuery('.header').has('container')){
			jQuery('.header').addClass('container-fluid');
			jQuery('.header').removeClass('container');
		}
	} else {
		if (jQuery('.header').has('scrolled')){
			jQuery('.header').removeClass('scrolled');
		}
		if (jQuery('.header').has('container-fluid')){
			jQuery('.header').addClass('container');
			jQuery('.header').removeClass('container-fluid');
		}
	}
});