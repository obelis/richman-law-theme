<?php get_header(); ?>
<?php 
if ( has_post_thumbnail() ) {
	$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
	//$link = '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute( 'echo=0' ) . '" >';
	//$link .= get_the_post_thumbnail( $post->ID, 'featured' ); 
	//$link .= '</a>';
}
?>

<div style="background-image: url(<?=$large_image_url[0];?>);background-size: cover;">
<div class="page-intro inner-page">
</div>


<div class="container page-intro-info">
	<h1 class="page-headline"><?php the_title(); ?></h1>
</div>


<div class="container">

	<div class="row">
    	<div class="col-md-8 col-md-offset-2 inner-page-content">
        
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

</div>
<?php get_footer(); ?>