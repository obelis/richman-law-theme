<?php get_header(); ?>
<div class="container">
	<div class="row">
    	<div class="col-md-8">
        

<?php if (have_posts ()) : ?>
<?php while (have_posts ()) : the_post(); ?>
	
	<div class="post"> 
		<h2 class="title"><?php the_title(); ?></h2>
		<?php the_content(''); ?>
	</diV>
	
	
	<?php endwhile; ?>

	<?php endif ; ?>


       </div>
   </div>
</div>
<?php get_footer(); ?>