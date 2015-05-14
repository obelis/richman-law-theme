jQuery(document).ready(parallax);
jQuery(document).ready(heightGrabber);
jQuery(window).resize(heightGrabber);
function parallax(){
	var parallaxItems = jQuery('.parallax-scroll');
	var $window = jQuery(window);
	$window.on('scroll', function(){
		var scrollTop = $window.scrollTop();
		parallaxItems.each(function(){
			var $this = jQuery(this);
			var scrollSpeed = -(scrollTop / 4);
			$this.css('transform', 'translateY(' + scrollSpeed + 'px');
		});
	});
}
function heightGrabber(){
	var totalHeight = jQuery(document).outerHeight(true);
	var viewableHeight = jQuery(window).height();
	console.log(totalHeight);
	console.log(viewableHeight);
	var parallaxItems = jQuery('.parallax-window');
	jQuery(parallaxItems).each(function(index, element) {
		var parallaxItemDistance = jQuery(this).offset();
		console.log(parallaxItemDistance.top);
    });
}