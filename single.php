<?php get_header(); ?>
      <div class="row">

        <div class="col-md-8">
        
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h1><?php the_title(); ?></h1>
			
			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<!-- Adds featured image to post -->
			<?php if (has_post_thumbnail()) { ?>
					<a href="<?php the_permalink(); ?>" class="img-thumbnail"><?php 
					$default_attr = array('class'	=> "img-responsive");
					the_post_thumbnail('full', $default_attr); ?></a>
				<?php } else { ?>	
					<a href="<?php the_permalink() ; ?>" class="img-thumbnail"><img src="<?php bloginfo('template_url'); ?>/images/chessboard.jpg" class="img-responsive"/></a>
			<?php } ?> 

			<div class="entry">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
				<?php the_tags( 'Tags: ', ', ', ''); ?>

			</div>
			
			<?php edit_post_link('Edit this entry','','.'); ?>
			
		</div>

	<?php comments_template(); ?>

	<?php endwhile; endif; ?>
       
        </div><!--/span-->
    
     <?php get_sidebar(); ?>
     	
<?php get_footer(); ?>


     