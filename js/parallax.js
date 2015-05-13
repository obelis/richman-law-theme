jQuery(document).ready(parallax);
function parallax(){
	var parallaxItems = jQuery('.parallax-scroll');
	var $window = jQuery(window);
	$window.on('scroll', function(){
		var scrollTop = $window.scrollTop();
		parallaxItems.each(function(){
			var $this = jQuery(this);
			var scrollSpeed = -(scrollTop / 6);
			$this.css('transform', 'translateY(' + scrollSpeed + 'px');
		});
	});
}