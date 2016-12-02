<?php
/**
 * Delete custom post thumbnail
 *
 * Delete custom post thumbnail if user manually change or delete the
 * featured image.
 *
 * @package Suri
 * @since 0.0.8
 */

/**
 * Delete suri thumbnail on deletion of featured image.
 *
 * @since  0.0.8
 *
 * @param bool $check      Whether to short circuit delete metadata.
 * @param int  $object_id  Object ID.
 * @param str  $meta_key   Meta Key.
 * @param mix  $meta_value Meta value.
 * @param bool $value      Whether to delete the matching metadata entries.
 * @return (true|null) null to continue with metadata function, true to short circuit.
 */
function suri_delete_thumbnails( $check, $object_id, $meta_key, $meta_value, $value ) {
	if ( '_thumbnail_id' !== $meta_key ) :
		return null;
	endif;

	if ( get_post_meta( $object_id, 'suri_thumbnail_id', true ) ) :
		delete_post_meta( $object_id, 'suri_thumbnail_id' );
		return true;
	endif;

	return null;
}
add_filter( 'delete_post_metadata', 'suri_delete_thumbnails', 12, 5 );

/**
 * Delete suri thumbnail on addition of featured image.
 *
 * @since  0.0.8
 *
 * @param bool $check      Whether to short circuit delete metadata.
 * @param int  $object_id  Object ID.
 * @param str  $meta_key   Meta Key.
 * @param mix  $meta_value Meta value.
 * @param bool $value      Whether to delete the matching metadata entries.
 * @return null continue with metadata function.
 */
function delete_suri_thumbnail( $check, $object_id, $meta_key, $meta_value, $value ) {
	if ( '_thumbnail_id' !== $meta_key ) :
		return null;
	endif;

	if ( get_post_meta( $object_id, 'suri_thumbnail_id', true ) ) :
		delete_post_meta( $object_id, 'suri_thumbnail_id' );
	endif;

	return null;
}
add_filter( 'update_post_metadata', 'delete_suri_thumbnail', 12, 5 );
