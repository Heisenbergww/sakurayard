<?php
/**
 * Advanced script for handling post thumbnails
 *
 * Fetches proper image from the post to be used as thumbnail incase no
 * featured image has been set for that post.
 *
 * @package Suri
 * @since 0.0.5
 */

/**
 * Class to fetch thumbnail id of current post.
 *
 * @since  0.0.8
 */
class Suri_Thumbnail {

	/**
	 * Constructor method intentionally left blank.
	 *
	 * @since  0.0.8
	 */
	private function __construct() {}

	/**
	 * Attach with get_metadata to pass thumbnail ID.
	 *
	 * @since  0.0.8
	 *
	 * @param int  $thumbnail_id Thumbnail id.
	 * @param int  $object_id    Post ID for which thumbnail required.
	 * @param str  $meta_key     Metadata key.
	 * @param bool $single       If true, return only the first value of the specified meta_key.
	 * @return (int|string|null) Post thumbnail ID or empty string or null.
	 */
	public static function thumbnail( $thumbnail_id, $object_id, $meta_key, $single ) {
		if ( '_thumbnail_id' !== $meta_key ) :
			return null;
		endif;

		$meta_type = 'post';
		$meta_cache = wp_cache_get( $object_id, $meta_type . '_meta' );

		if ( ! $meta_cache ) {
			$meta_cache = update_meta_cache( $meta_type, array( $object_id ) );
			$meta_cache = $meta_cache[ $object_id ];
		}

		if ( isset( $meta_cache[ $meta_key ] ) ) :
			return maybe_unserialize( $meta_cache[ $meta_key ][0] );
		endif;

		return self::get_post_thumbnail_id( $object_id );
	}

	/**
	 * Retrieve post thumbnail ID.
	 *
	 * @since 0.0.8
	 *
	 * @param int $post_id Post ID.
	 * @return (string|int) Post thumbnail ID or empty string.
	 */
	public static function get_post_thumbnail_id( $post_id ) {
		$thumb = get_post_meta( $post_id, 'suri_thumbnail_id', true );

		/** This filter is documented in wp-includes/post-thumbnail-template.php */
		$size = apply_filters( 'post_thumbnail_size', get_theme_mod( 'suri_thumbnail_size', suri_default_thumb_size() ) );

		if ( ! $thumb || ! self::has_valid_image_size( $thumb, $size ) ) :
			new Suri_Set_Thumbnail( $size );
			$thumb = get_post_meta( $post_id, 'suri_thumbnail_id', true );
		endif;

		if ( isset( $thumb['id'] ) ) :
			return absint( $thumb['id'] );
		endif;

		return '';
	}

	/**
	 * Check if thumbnail size is valid.
	 *
	 * If required thumbnail size has been changed by user then it may be possible
	 * that previously set thumbnail image is having width and/or height smaller than
	 * changed thumbnail size. This function will ensure correct size of thumbnail.
	 *
	 * @since 0.0.8
	 *
	 * @param array $thumb      Suri thumbnail id and size array saved in post meta.
	 * @param str   $thumb_size Required size of thumbnail.
	 * @return (string|int) Post thumbnail ID or empty string.
	 */
	public static function has_valid_image_size( $thumb, $thumb_size ) {
		if ( ! $thumb || ! isset( $thumb['size'] ) ) :
			return false;
		endif;

		if ( $thumb_size === $thumb['size'] ) :
			return true;
		endif;

		$image = wp_get_attachment_image_src( $thumb['id'], $thumb_size, true );
		list( $src, $width, $height ) = $image;

		$min_size = suri_get_thumb_size( $thumb_size, 'set_thumbnail' );

		if ( $min_size['w'] > $width || $min_size['h'] > $height ) :
			return false;
		endif;

		return true;
	}
}

add_filter( 'get_post_metadata', array( 'Suri_Thumbnail', 'thumbnail' ), 12, 4 );
