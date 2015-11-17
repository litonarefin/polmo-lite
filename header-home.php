<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Polmo
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="masthead" class="masthead navbar navbar-default navbar-fixed-top">
		<div class="container">
			
			<!-- Brand and toggle get grouped for better mobile display -->			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
					<i class="fa fa-bars"></i>
				</button>
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php

					$jeweltheme_polmo_logo = get_theme_mod('jeweltheme_polmo_logo');

					if(isset($jeweltheme_polmo_logo) && $jeweltheme_polmo_logo != ""){ ?>				
						
						<img src="<?php echo esc_url( $jeweltheme_polmo_logo );?>" alt="<?php echo get_bloginfo('title');?>">				

					<?php } else{ 
						
								if( file_exists(get_stylesheet_directory()."/images/logo.png")){

									echo '<img src="'.get_stylesheet_directory_uri().'/images/logo.png" alt="'.get_bloginfo('title').'">';				

								} else{

									echo '<img src="'.get_stylesheet_directory_uri().'/images/logo.png" alt="'.get_bloginfo('title').'">';

								}
						}
					?>
				</a>					
			</div>


			<nav id="main-menu" class="collapse navbar-collapse pull-right">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#main-slider">Home</a></li>
					<li><a href="#services">Services</a></li>
					<li><a href="#about">About Us</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#blog">Blog</a></li>
					<li><a href="#contact">Contact us</a></li>
				</ul>
			</nav> <!-- /.navbar-collapse  -->

		</div><!-- /.container -->
	</header><!-- /#masthead -->


