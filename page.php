<?php get_header(); ?>
<div class="page-intro inner-page">
<?php 
if ( has_post_thumbnail() ) {
	$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
	echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute( 'echo=0' ) . '" >';
	echo get_the_post_thumbnail( $post->ID, 'featured' ); 
	echo '</a>';
}
?>
</div>
<div class="container">

	<div class="row">
    	<div class="col-md-8 col-md-offset-2">
        
<?php if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('<p id="breadcrumbs">','</p>');
} ?>
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