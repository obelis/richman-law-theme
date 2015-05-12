<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php bloginfo('description'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/css/theme.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="container header">
    	<div class="row">
        	<div class="col-lg-4 col-md-4 col-sm-3">
	
		<img src="data:image/png;base64," data-src="<?php bloginfo('template_url'); ?>/js/holder.js/400x100/text:LOGO" alt="First slide" class="img-responsive img-thumbnail logo" />
        	</div>
            <div class="col-lg-8 col-md-8 col-sm-9">
                <div class="navbar-wrapper">
                    <div class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="vertical-center">
                            <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header navbar-collapse collapse', 'menu_class' => 'nav navbar-nav' ) ); ?>
                        </div>
                    </div>
                </div>
        	</div>
        </div>
	</div>