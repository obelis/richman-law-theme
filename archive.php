<?php get_header(); ?>

      <div class="row">

        <div class="col-md-9">
        
		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2>Archive for <?php the_time('F jS, Y'); ?></h2>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2>Archive for <?php the_time('F, Y'); ?></h2>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2 class="pagetitle">Author Archive</h2>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2 class="pagetitle">Blog Archives</h2>
			
			<?php } ?>

			<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

			<?php if (have_posts ()) : ?>
<?php while (have_posts ()) : the_post(); ?>
	
	<div <?php post_class (); ?>> 
		<h2><a href="<?php the_permalink() ; ?>"><?php the_title(); ?></a></h2>
		
		<?php if (has_post_thumbnail()) { ?>
			<a href="<?php the_permalink(); ?>" class="post-thumbnail"><?php the_post_thumbnail(); ?></a>
		<?php } else { ?>	
			<a href="<?php the_permalink() ; ?>" class="post-thumbnail"><img src="<?php bloginfo('template_url'); ?>"  /></a>
	<?php } ?> 
	<?php the_content(''); ?>
	
		<div class="post-info">
			<ul>
				<li class="date"><?php the_time('jSFY'); ?></li>
				<li class="category">Posted in <?php the_category(', ') ; ?></li>
				<li class="read-more"><a href="<?php the_permalink(); ?>">Read more</a></li>
			</ul>
		</diV>
	</diV>
	
	
	<?php endwhile; ?>
	
	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>>
	
	<?php else : ?>
	
	<div class="nothing">
		<h2>Nothing Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<p><a href="<?php echo get_option ('home'); ?>">Return to the homepage</a></p>
	</diV>
	<?php endif ; ?>



        </div><!--/span-->
<?php get_sidebar(); ?>

<?php get_footer(); ?>
