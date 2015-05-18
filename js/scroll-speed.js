$(function(){
  var boxes = $('[data-scroll-speed]'),
      $window = $(window),
	  $introHeight = $('.page-intro').outerHeight(true);
  $window.on('scroll', function(){
    var scrollTop = $window.scrollTop();
    boxes.each(function(){
      var $this = $(this),
          scrollspeed = parseInt($this.data('scroll-speed')),
          val = - scrollTop / scrollspeed;
      $this.css('transform', 'translateY(' + val + 'px)');
	  if ($this.hasClass('fade-away')){
		  var offset = $(this).offset().top;
		  offset = offset + introHeight / 2;
		  $(this).css({ 'opacity': 1 - (scrollTop - offset + introHeight) / introHeight });
	  }
    });
  });
})