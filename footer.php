

    

<div class="footer">
<div class="container">

          <div class="row">
			<div class="col-md-12" id="footer-cta">
				<hr />
				<h2>Request A Free Consultation</h2>				
				<h3>Fill out the form below to receive a free and confidential&nbsp;consultation.</h3>
				 <h3 class="footer_header">Please&nbsp;Call&nbsp;Us&nbsp;At: <a href="tel:+18008019655"><span itemprop="telephone">800.801.9655</span></a> <span class="visible-sm-inline">|</span> 24&nbsp;Hours&nbsp;a&nbsp;Day <span class="visible-sm-inline">:</span> 7&nbsp;Days&nbsp;a&nbsp;Week.</h3>
				 <a class="btn btn-large btn-primary ctc visible-xs" href="tel:+18008019655">Click To Call</a>
				<hr />
				<?php echo do_shortcode('[gravityform id="1" name="Request A Free Consultation" title="false" description="false"]'); ?>

			</div><!-- /.footer-cta -->
        	
          </div><!--/row-->





      <hr>


      <footer>
      	&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?> | <a href="/privacy-policy/">Privacy Policy</a> | <a href="/legal-disclaimer/">Legal Disclaimer</a>
      </footer>

</div><!-- /.container -->
</div><!-- /.footer -->
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/holder.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/height-fix.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/header-scroll.js"></script>

	<?php wp_footer(); ?>
  <script type="text/javascript">
  jQuery("document").ready(function() {

	/*Start: Prevent the default white background on blur of top navigation */
	jQuery(".dropdown-menu li a").mousedown(function() {
		var dropdown = $(this).parents('.dropdown');
		var link = dropdown.children(':first-child');
		link.css('background-color', "#2E3436");
		link.css('color', 'white');
	});
	/*End: Prevent the default white background on blur of top navigation */

  /*Start : Automatically start the slider */
/*
	jQuery('.carousel').carousel({
      interval: 5000
   });
*/
	/*End: Automatically start the slider */

});
</script>
  </body>

</html>