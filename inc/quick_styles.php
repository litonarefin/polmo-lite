<?php
function jeweltheme_polmo_quick_style(){ 
?>
	<style type="text/css">
	    .subscribe-section {
	    	background: url( "<?php echo esc_html( get_theme_mod('jeweltheme_polmo_subscriber_image') ); ?>") no-repeat center center fixed;
	    }  
	</style>
<?php 

}
add_action( 'wp_head', 'jeweltheme_polmo_quick_style');

