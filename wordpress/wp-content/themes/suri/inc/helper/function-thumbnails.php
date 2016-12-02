<?php
/**
 * Get post thumbnail size and dimensions
 *
 * @package Suri
 * @since 0.0.1
 */

/**
 * Get name of all registered thumbnail sizes.
 *
 * @since 0.0.8
 *
 * @return array Thumbnail image sizes.
 */
function suri_get_thumbnail_sizes() {
	$sizes = array();
	foreach ( get_intermediate_image_sizes() as $key => $size ) {
		$size = sanitize_text_field( $size );
		$sizes[ $size ] = $size;
	}
	return $sizes;
}

/**
 * Get default thumbnail size name.
 *
 * @since 0.0.9
 *
 * @return string Default thumbnail size name.
 */
function suri_default_thumb_size() {
	if ( has_image_size( 'post-thumbnail' ) ) :
		$img_size = 'post-thumbnail';
	else :
		$img_size = 'thumbnail';
	endif;
	return $img_size;
}

/**
 * Get thumbnail dimensions from thumb size name.
 *
 * @since 0.0.5
 *
 * @param str $thumb_size Thumbnail size.
 * @param str $context  Function call context.
 * @return array Thumbnail image width and height.
 */
function suri_get_thumb_size( $thumb_size = '', $context = '' ) {
	global $_wp_additional_image_sizes;
	$size = array();

	if ( '' === $thumb_size ) :

		/** This filter is documented in wp-includes/post-thumbnail-template.php */
		$thumb_size = apply_filters( 'post_thumbnail_size', get_theme_mod( 'suri_thumbnail_size', suri_default_thumb_size() ) );
	endif;

	if ( in_array( $thumb_size, array( 'thumbnail', 'medium', 'medium_large', 'large' ), true ) ) :
		$size['w'] = intval( get_option( "{$thumb_size}_size_w" ) );
		$size['h'] = intval( get_option( "{$thumb_size}_size_h" ) );
	elseif ( isset( $_wp_additional_image_sizes[ $thumb_size ] ) ) :
		$size['w'] = intval( $_wp_additional_image_sizes[ $thumb_size ]['width'] );
		$size['h'] = intval( $_wp_additional_image_sizes[ $thumb_size ]['height'] );
	endif;

	/**
	 * Filter thumbnail image dimensions.
	 *
	 * @since 0.0.5
	 *
	 * @param array $size     Thumbnail dimensions.
	 * @param str   $context  Function call context.
	 */
	return apply_filters( 'suri_thumbnail_dimensions', $size, $context );
}
