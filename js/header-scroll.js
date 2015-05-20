jQuery(window).on('scroll', function(){
	var scrollPosition = jQuery('.header').offset();
	var introHeight = jQuery('.page-intro').outerHeight(true);
	var scrolledActive = introHeight - 100;
	if (scrollPosition.top > scrolledActive){
		jQuery('.header').addClass('scrolled');
		if (jQuery('.header').has('container')){
			jQuery('.header').addClass('container-fluid');
			jQuery('.header').removeClass('container');
		}
		jQuery('.header-inner-container').addClass('container');
	} else {
		if (jQuery('.header').has('scrolled')){
			jQuery('.header').removeClass('scrolled');
		}
		if (jQuery('.header').has('container-fluid')){
			jQuery('.header').addClass('container');
			jQuery('.header').removeClass('container-fluid');
		}
		if (jQuery('.header-inner-container').has('container')){
			jQuery('.header-inner-container').removeClass('container');
		}
	}
});
$(function(){
  var boxes = $('[data-scroll-speed]'),
      $window = $(window),
	  introHeight = $('.page-intro').outerHeight(true);
  $window.on('scroll', function(){
    var scrollTop = $window.scrollTop();
    boxes.each(function(){
      var $this = $(this),
          scrollspeed = parseInt($this.data('scroll-speed')),
          val = scrollTop / scrollspeed;
      $this.css('transform', 'translateY(' + val + 'px)');
    });
  });
})