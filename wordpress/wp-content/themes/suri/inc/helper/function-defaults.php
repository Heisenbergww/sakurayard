<?php
/**
 * Defaults values for customizer options
 *
 * @package Suri
 * @since 0.0.1
 */

/**
 * Set default values for theme customization options.
 *
 * @since 0.0.1
 *
 * @param str $option name of the option.
 * @return mixed Returns integer, string or array option values.
 */
function suri_get_theme_defaults( $option ) {

	/**
	 * Filter default values for customizer options.
	 *
	 * @since 0.0.1
	 */
	$suri_defaults = apply_filters(
		'suri_theme_defaults', array(
			'suri_logo_image'                  => '',
			'suri_header_layout'               => 'content-align',
			'suri_layout'                      => 'content-sidebar',
			'suri_hide_sidebar_on_home'        => '',
			'suri_header_on_home_only'         => 1,
			'suri_excerpt_option'              => 'excerpt',
			'suri_excerpt_length'              => 40,
			'suri_excerpt_teaser'              => esc_html__( 'Continue reading...', 'suri' ),
			'suri_thumbnail_display'           => 1,
			'suri_single_thumbnail'            => '',
			'suri_thumbnail_size'              => 'thumbnail',
			'suri_no_web_fonts'                => '',
			'suri_copyright'                   => '',
			'suri_site_credit'                 => '',
		)
	);
	if ( 'all' === $option ) :
		return $suri_defaults;
	else :
		return $suri_defaults[ $option ];
	endif;
}
