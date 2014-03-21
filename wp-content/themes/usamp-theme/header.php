<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package usamp
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    
<link rel="stylesheet" type="text/css" href="//cloud.typography.com/7098072/679604/css/fonts.css" />
<link rel="stylesheet" type="text/css" href="//cloud.typography.com/7098072/757384/css/fonts.css" />
    
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
        <div class="container-fluid">
            <div class="row color-stripe">
                <div class="col-xs-4"></div>
                <div class="col-xs-4"></div>
                <div class="col-xs-4"></div>
            </div>
        </div>
        
		<div class="site-branding">
			<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="logo" src="<?php bloginfo('template_directory');?>/images/logo.png" /></a>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'usamp' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'usamp' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'header' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
