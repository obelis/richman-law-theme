

    
      </div><!--/row-->
</div><!--/.fluid-container-->
<div class="footer">
<div class="container">

          <div class="row">
				<div class="col-md-4">
				  <h3 class="footer_header">Address</h3>
                  <div itemscope itemtype="http://schema.org/Attorney"> 
                  	<p>
                   		<span itemprop="name">Law Offices of Eric Richman</span><br />
                        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                            <span itemprop="streetAddress">188 East 64th Street</span><br>
                            <span itemprop="addressLocality">New York</span>,
                            <span itemprop="addressRegion">NY</span> 10065
                        </div>
                    </p>
                    <h3 class="footer_header">Phone:<a href="tel:+12126883965"><span itemprop="telephone">212.688.3965</span></a></h3>
                    <h3 class="footer_header">Fax: <span itemprop="faxNumber">212.688.0007</span></h3>
                     <h3 class="footer_header">Hours</h3>
                     <p><meta itemprop="openingHours" content="Mo-Fri 8:00-19:00">Monday through Friday<br />8:00am to 7:00pm</p>
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