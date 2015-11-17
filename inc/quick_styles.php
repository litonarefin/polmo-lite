<?php
function jeweltheme_polmo_quick_style(){ 
	$jeweltheme_polmo_banner_image = get_theme_mod('jeweltheme_polmo_banner_image', get_template_directory_uri() . '/images/background/blog.jpg');
?>
	<style type="text/css">
	    .subscribe-section {
	    	background: url( "<?php echo esc_html( get_theme_mod('jeweltheme_polmo_subscriber_image') ); ?>") no-repeat center center fixed;
	    }  
	    .page-head{
	    	background: url("<?php echo esc_html( get_theme_mod('jeweltheme_polmo_banner_image') ); ?>") no-repeat center top fixed;
	    }
	</style>
<?php 

}
add_action( 'wp_head', 'jeweltheme_polmo_quick_style');

