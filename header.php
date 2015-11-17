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
				<?php 
				wp_nav_menu( array(
					'menu'              => 'primary',
					'theme_location'    => 'primary',
					'depth'             => 4,
					'container'         => 'ul',
					'fallback_cb'       => 'wp_page_menu',
					'container_class'   => 'nav navbar-nav',
					'container_id'    	=> 'main-menu',
					'menu_class'      	=> 'nav navbar-nav',
					'menu_id'         	=> '',
					'depth'           	=> 4,
					)
				);
				?>
			</nav> <!-- /.navbar-collapse  -->
			<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

		</div><!-- /.container -->
	</header><!-- /#masthead -->

<?php
$jeweltheme_polmo_general_blog_title = get_theme_mod('jeweltheme_polmo_general_blog_title',__('Welcome To <span>Polmo</span> Blog','jeweltheme_polmo'));
$jeweltheme_polmo_general_blog_desc = get_theme_mod('jeweltheme_polmo_general_blog_desc',__('Our Creative Blog Will keep you always Updated','jeweltheme_polmo'));

?>

	<section id="page-head" class="page-head text-center" data-stellar-background-ratio="0.1" data-stellar-vertical-offset="0">
		<div class="head-overlay">
			<div class="section-padding">
				<div class="container">
					<h1 class="page-title">
						<?php echo $jeweltheme_polmo_general_blog_title; ?>
					</h1><!-- /.page-title -->
					<p class="page-description">
						<?php echo $jeweltheme_polmo_general_blog_desc; ?>
					</p><!-- /.page-description -->
				</div><!-- /.container -->
			</div><!-- /.section-padding -->
		</div><!-- /.head-overlay -->
	</section><!-- /#page-head -->



	<!-- BreadCrunb Section -->

	<section id="page-status" class="page-status">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="#">All</a></li>
				<li><a href="#">Blog post</a></li>
				<li class="active">Comments</li>
				<li><a href="#">More posts</a></li>
			</ol><!-- /.breadcrumb -->
		</div><!-- /.container -->
	</section><!-- /#page-status -->

	<!-- BreadCrunb Section -->


	<section id="main-content" class="main-content">
		<div class="container">
			<div class="row">