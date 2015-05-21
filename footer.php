

    
      </div><!--/row-->
</div><!--/.fluid-container-->
<div class="footer">
<div class="container">

          <div class="row">
			<div class="col-md-12" id="footer-cta">
				<hr />
				<h2>REQUEST A FREE CONSULTATION</h2>				
				<h3>Fill out the form below to receive a free and confidential consultation.</h3>
				 <h3 class="footer_header">Phone: <a href="tel:+12126883965"><span itemprop="telephone">212.688.3965</span></a></h3>
				<hr />
				<?php echo do_shortcode('[gravityform id="1" name="Request A Free Consultation" title="false" description="false"]'); ?>

			</div>
        	
          </div><!--/row-->





      <hr>


      <footer>
      	&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?>
      </footer>


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
	jQuery('.carousel').carousel({
      interval: 5000
   });
	/*End: Automatically start the slider */

});
</script>
  </body>

</html>