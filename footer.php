

    
      </div><!--/row-->
</div><!--/.fluid-container-->
<div class="footer">
<div class="container">

          <div class="row">
				<div class="col-md-4">
				  <h3 class="footer_header">
				        Recent Posts
				    </h3>
				    <div class="post">
				        <a href="#">
				            <img src="data:image/png;base64," data-src="<?php bloginfo('template_url'); ?>/js/holder.js/62x62/text:PIC" alt="" class="img-circle">
				        </a>
				        <div class="date">
				            Wed, 12 Dec
				        </div>
				        <a href="blogpost.html" class="title">
				            Randomised words which don't look embarrasing hidden.
				        </a>
				    </div>
				    
				    <div class="post">
				        <a href="#">
				            <img src="data:image/png;base64," data-src="<?php bloginfo('template_url'); ?>/js/holder.js/62x62/text:PIC" alt="" class="img-circle">				        </a>
				        <div class="date">
				            Mon, 12 Dec
				        </div>
				        <a href="blogpost.html" class="title">
				            Randomised words which don't look embarrasing hidden.
				        </a>
				    </div>
				    
				    <div class="post">
				        <a href="#">
				            <img src="data:image/png;base64," data-src="<?php bloginfo('template_url'); ?>/js/holder.js/62x62/text:PIC" alt="" class="img-circle">				        </a>
				        <div class="date">
				            Mon, 12 Dec
				        </div>
				        <a href="blogpost.html" class="title">
				            Randomised words which don't look embarrasing hidden.
				        </a>
				    </div>
				</div>
				
								
				<div class="col-md-4">
				<h3 class="footer_header">
				       Map
				    </h3>
					<div class="textwidget"><iframe width="300" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=Novins,+York+%26+Jacobus&amp;hl=en&amp;sll=39.95354,-74.198179&amp;sspn=0.006295,0.006295&amp;ie=UTF8&amp;view=map&amp;cid=13854305820662554184&amp;hq=Novins,+York+%26+Jacobus&amp;hnear=&amp;source=embed&amp;t=m&amp;ll=39.953093,-74.200909&amp;spn=0.004935,0.006437&amp;z=16&amp;output=embed"></iframe><br><small><a href="https://maps.google.com/maps?q=Novins,+York+%26+Jacobus&amp;hl=en&amp;sll=39.95354,-74.198179&amp;sspn=0.006295,0.006295&amp;ie=UTF8&amp;view=map&amp;cid=13854305820662554184&amp;hq=Novins,+York+%26+Jacobus&amp;hnear=&amp;source=embed&amp;t=m&amp;ll=39.953093,-74.200909&amp;spn=0.004935,0.006437&amp;z=16" style="color:#0000FF;text-align:left">View Larger Map</a></small></div>
				</div>
	<div class="col-md-4">
				<h3 class="footer_header">
                        Contact
                    </h3>
                     <form>
      <div class="">
          <input id="name" name="name" type="text" class="form-control form-group" placeholder="Name"> 
          <input id="email" name="email" type="email" class="form-control form-group" placeholder="Email address">
      </div>
      <div class="">
          <textarea id="message" name="message" class="form-control form-group" placeholder="Your Message" rows="5"></textarea>
      </div>
      
      <div class="">
          <button id="contact-submit" type="submit" class="btn btn-primary input-medium pull-right">Send</button>
      </div>
  </form>
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
    <script src="<?php bloginfo('template_url'); ?>/js/scroll-speed.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/parallax.js"></script>

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