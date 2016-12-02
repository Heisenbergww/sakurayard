<?php
/**
 * Adds inline css to site head
 *
 * @package Suri
 * @since 0.0.1
 */

/**
 * Generate inline css.
 *
 * Collect portions of inline css from different functions and methods,
 * and enque them to site head.
 *
 * @since 0.0.8
 */
function suri_inline_css() {

	/**
	 * Filter inline css.
	 *
	 * @since 0.0.8
	 */
	$output = apply_filters( 'suri_get_inline_style', '' );

	if ( '' !== $output ) :

		/* Strip tags and remove breaks */
		$output = wp_strip_all_tags( $output, true );

		/* A bit of css minification */
		$to_be_replaced = array( ': ', '; ', ' {', ', ', ';}', ' + ' );
		$replace_with = array( ':', ';', '{', ',', '}', '+' );
		$output = str_replace( $to_be_replaced, $replace_with, $output );

		/* Enqueue inline css */
		wp_add_inline_style( 'suri-style', $output );
	endif;
}
add_action( 'wp_enqueue_scripts', 'suri_inline_css', 50 );

/**
 * Inline thumbnail css.
 *
 * Check thumbnail size and return css to either left align or center
 * align the thumbnail.
 *
 * @since 0.0.6
 *
 * @see suri_inline_css()
 *
 * @param str $output Css string.
 * @return string $output css string.
 */
function suri_thumb_css( $output ) {
	if ( is_singular() && ( 1 !== get_theme_mod( 'suri_single_thumbnail', suri_get_theme_defaults( 'suri_single_thumbnail' ) ) ) ) :
		return $output;
	endif;

	global $content_width;
	$thumb_size = suri_get_thumb_size();
	$width = absint( $thumb_size['w'] );
	if ( $width <= ( $content_width / 3 ) ) :
		$min_width = 3 * $width;
		$thumb_css = sprintf( '
		.post-thumbnail {
			float:left;
			margin-right:1.5em;
			margin-bottom:0;
		}
		' );
		$output .= sprintf( '
		@media only screen and (min-width: %1$spx) {
			%2$s
		}
		', $min_width, $thumb_css );
	else :
		$thumb_css = sprintf( '
		.post-thumbnail {
			float:none;
			margin-left:auto;
			margin-right:auto;
			margin-bottom:1.5em;
		}
		' );
		$output .= sprintf( '
		@media only screen and (min-width: 768px) {
			%s
		}
		', $thumb_css );
	endif;

	return $output;
}
add_filter( 'suri_get_inline_style', 'suri_thumb_css' );

/**
 * Inline css for footer widgets border color.
 *
 * Footer widgets border-top color should match with body background-color
 * so that it looks like there is a vertical gap between two widgets.
 *
 * @since 0.0.8
 *
 * @see suri_inline_css()
 *
 * @param str $output Css string.
 * @return string $output css string.
 */
function suri_footer_widget_border_color( $output ) {
	$color = get_theme_mod( 'background_color', '' );
	if ( '' !== $color ) :
		$color = '#' . $color;
		// 3 or 6 hex digits, or the empty string.
		if ( preg_match( '|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) ) :
			$output .= sprintf( '
			.footer-widgets .widget + .widget {
				border-color: %s;
			}
			', $color );
		endif;
	endif;

	return $output;
}
add_filter( 'suri_get_inline_style', 'suri_footer_widget_border_color' );
