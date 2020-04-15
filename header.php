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
	<meta property="og:title" content="Physical Therapy in Brick, New Jersey" />
<meta property="og:description" content="Advantage Physical Therapy provide their patients with the highest level of individualized attention. Dedicated to delivering patient care for children, adults, and seniors, utilizing a hands on approach, along with evidence based treatment, to improve and restore optimal physical function. We specialize in orthopedics, sports medicine, and rehabilitation." />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://www.google.com/fonts#UsePlace:use/Collection:Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<script src="https://kit.fontawesome.com/859c3b0e27.js" crossorigin="anonymous"></script>
<!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
--><?php wp_head(); ?>
	
	<script type='text/javascript'>
	$(document).ready(function () {
	$(window).scroll(function () {
	if ($(document).scrollTop() > 100) {
		$("header").addClass("scrolled");
	} else {
		$("header").removeClass("scrolled");
	}
	});
	});
	</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">

    <div class="inner">
		<div class="site-branding">
			<span class="site-logo-wh"><a href="/"> <img src=""/><img src="https://advantageptbrick.com/~advanub5/wp-content/themes/hogeyboom/images/svg/logo-lt.svg" width="273" height="109" alt="advantage physical therapy" class="logo"/> </a></span>
			<span class="site-logo-dk"><a href="/"> <img src=""/><img src="https://advantageptbrick.com/~advanub5/wp-content/themes/hogeyboom/images/svg/logo-dk.svg" width="273" height="109" alt="advantage physical therapy" class="logo"/> </a></span>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '', 'hogeyboom' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
       
<!--        <div class="phonetag">
        <i class="fa fa-mobile"></i>
        <p><span>Call us now</span>
       <bdi>(732)262-0111</bdi>
        </p>
        </div>-->
        
        </div> 
	</header><!-- #masthead -->

	<div id="content" class="site-content">
