<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package hogeyboom
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://www.google.com/fonts#UsePlace:use/Collection:Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<?php wp_head(); ?>
</head>

<body>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'hogeyboom' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<section class="socMedia">
			<div class="inner">
				<span><i class="fa fa-phone"></i> (732) 262-0111</span>
				<span><a href="mailto:info@advantagebricknj.com"><i class="fa fa-email"></i> info@advantagebricknj.com</a></span>
				<span><i class="fa fa-map-marker"></i> 990 Cedarbridge Ave Brick, NJ 08723</span>
				</div>
		</section>
    <div class="inner">
		<div class="site-branding">
			<h1 class="site-title"><a href="/"> <img src=""/><img src="http://box2093.temp.domains/~advanub5/wp-content/themes/hogeyboom/images/logo-apt.png" width="273" height="109" alt="advantage physical therapy" class="logo"/> </a></h1>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'hogeyboom' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
       
        <div class="phonetag">
        <i class="fa fa-mobile"></i>
        <p><span>Call us now</span>
       <bdi>(732)262-0111</bdi>
        </p>
        </div>
        
        </div> 
	</header><!-- #masthead -->

	<div id="content" class="site-content">
<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>