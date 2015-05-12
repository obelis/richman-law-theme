<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Obelis Media Responsive Theme </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
<!-- 	<link href="<?php bloginfo('template_url'); ?>/css/bootstrap-theme.min.css" rel="stylesheet"> -->
	<link href="<?php bloginfo('template_url'); ?>/css/theme.css" rel="stylesheet">
   
    <style type="text/css">
     /* */
    </style>
   

	<?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

	<div class="container header"> 
	
		<img src="data:image/png;base64," data-src="<?php bloginfo('template_url'); ?>/js/holder.js/500x100/text:LOGO" alt="First slide" class="img-responsive img-thumbnail logo" />
	
		<img src="data:image/png;base64," data-src="<?php bloginfo('template_url'); ?>/js/holder.js/300x100/text:SOCIAL" alt="First slide" class="img-responsive img-thumbnail logo pull-right" />
	</div>
	


<div class="navbar-wrapper">
	<div class="container"> 
	
		<div class="navbar navbar-default">
		        <div class="container">
		          <div class="navbar-header">
		            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		            </button>
		            <a class="navbar-brand" href="/">Obelis Framework</a>
		          </div>
		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header navbar-collapse collapse', 'menu_class' => 'nav navbar-nav' ) ); ?>
		
		        </div>
		</div>
	</div>
</div>


<div class="container">
