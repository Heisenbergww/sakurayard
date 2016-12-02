<?php
/**
 * Facilitate adding and filtering attributes to html elements
 *
 * This file incorporates code from Stargazer WordPress Theme,
 * Copyright (c) 2013 - 2016, Justin Tadlock http://themehybrid.com/themes/stargazer.
 * Stargazer WordPress Theme is distributed under the terms of the GNU GPL.
 *
 * @package Suri
 * @since 0.0.1
 */

/**
 * Outputs an HTML element's attributes.
 *
 * @since  0.1.0
 *
 * @param  str   $slug The slug/ID of the element (e.g., 'sidebar').
 * @param  array $attr Array of attributes to pass in (overwrites filters).
 */
function suri_attr( $slug, $attr = array() ) {
	echo suri_get_attr( $slug, $attr ); // WPCS: Xss ok.
}

/**
 * Gets an HTML element's attributes.
 *
 * @since  0.1.0
 *
 * @param  str   $slug The slug/ID of the element (e.g., 'sidebar').
 * @param  array $attr Array of attributes to pass in (overwrites filters).
 * @return string
 */
function suri_get_attr( $slug, $attr = array() ) {
	$out    = '';

	if ( ! in_array( $slug, array( 'body', 'post', 'name', 'head' ), true ) ) :
		$attr['class'] = $slug;
	endif;

	/**
	 * Filter element's attributes.
	 *
	 * @since 0.0.1
	 */
	$attr = apply_filters( "suri_get_attr_{$slug}", $attr );

	if ( ! empty( $attr ) ) :
		foreach ( $attr as $name => $value ) {
			$out .= sprintf( ' %s="%s"', esc_html( $name ), esc_attr( $value ) );
		}
	endif;

	return $out;
}
