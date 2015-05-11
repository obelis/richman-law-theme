<?php get_header(); ?>

      <div class="row">

        <div class="col-md-8">
        
<?php if (have_posts ()) : ?>
<?php while (have_posts ()) : the_post(); ?>
	
	<div <?php post_class (); ?>> 
		<h2><a href="<?php the_permalink() ; ?>"><?php the_title(); ?></a></h2>
		<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
		
		<?php if (has_post_thumbnail()) { ?>
			<a href="<?php the_permalink(); ?>" class="img-thumbnail"><?php 
			$default_attr = array('class'	=> "img-responsive");
			the_post_thumbnail('full', $default_attr); ?></a>
		<?php } else { ?>	
			<a href="<?php the_permalink() ; ?>" class="img-thumbnail"><img src="<?php bloginfo('template_url'); ?>/images/chessboard.jpg" class="img-responsive"/></a>
	<?php } ?> 
	<?php the_excerpt(''); ?>
 <p><a class="btn btn-default" href="<?php the_permalink() ?>">Read More &raquo;</a></p>

	</diV>
	
	
	<?php endwhile; ?>
	
	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
	
	<?php else : ?>
	
	<div class="nothing">
		<h2>Nothing Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<p><a href="<?php echo get_option ('home'); ?>">Return to the homepage</a></p>
	</diV>
	<?php endif ; ?>




        </div><!--/span-->
    
     <?php get_sidebar(); ?>
     </div>
     <?php get_footer(); ?>