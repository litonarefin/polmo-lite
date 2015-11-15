jQuery(document).ready(function() {

	/* Upsells in customizer (Documentation link and Upgrade to PRO link */
	if( !jQuery( ".polmo-documentation" ).length ) {
		jQuery('#customize-theme-controls > ul').prepend('<li class="accordion-section polmo-documentation">');
	}

	if( jQuery( ".polmo-documentation" ).length ) {

		jQuery('.polmo-documentation').append('<a style="width: 80%; margin: 5px auto 5px auto; display: block; text-align: center;" href="http://docs.jeweltheme.com/polmo" class="button" target="_blank">{documentation}</a>'.replace('{documentation}', PolmoLiteCustomizer.documentation));
		jQuery('.polmo-documentation').append('<a style="width: 80%; margin: 5px auto 5px auto; display: block; text-align: center;" href="http://jeweltheme.com/product-category/wordpress-themes/" class="button" target="_blank">{viewthemes}</a>'.replace('{viewthemes}', PolmoLiteCustomizer.viewthemes));

	}

	if ( !jQuery( ".polmo-documentation" ).length ) {
		jQuery('#customize-theme-controls > ul').prepend('</li>');
	}

	jQuery( '.ui-state-default' ).on( 'mousedown', function() {
		jQuery( '#customize-header-actions #save' ).trigger( 'click' );

	});

});