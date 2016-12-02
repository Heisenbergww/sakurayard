<?php
/**
 * Fetches image for post thumbnail
 *
 * Apply various methods to get an appropriate image which can be
 * used as post thumbnail and save it as post metadata, if it gets
 * any image.
 *
 * @package Suri
 * @since 0.0.5
 */

/**
 * Class for getting thumbnail image ID for current post.
 *
 * @since  0.0.5
 */
class Suri_Set_Thumbnail {

	/**
	 * Holds post thumbnail ID.
	 *
	 * @since 0.0.5
	 * @access protected
	 * @var int
	 */
	protected $thumbnail = '';

	/**
	 * Holds secondary thumbnail ID.
	 *
	 * @since 0.0.8
	 * @access protected
	 * @var array
	 */
	protected $secondary_thumb = array();

	/**
	 * Holds minimum required size of thumbnail image.
	 *
	 * @since 0.0.8
	 * @access protected
	 * @var array
	 */
	protected $min_size;

	/**
	 * Holds post thumbnail size.
	 *
	 * @since 0.0.8
	 * @access protected
	 * @var string
	 */
	protected $thumb_size;

	/**
	 * Constructor method.
	 *
	 * @since  0.0.5
	 *
	 * @param str $size Post thumbnail required size.
	 */
	public function __construct( $size ) {
		$this->thumb_size = $size;

		$this->min_size = suri_get_thumb_size( $this->thumb_size, 'set_thumbnail' );

		$this->set_thumbnail_id();
	}

	/**
	 * Get correct sized post thumbnail ID and if found, save it as post meta.
	 *
	 * @since  0.0.5
	 */
	private function set_thumbnail_id() {
		$this->thumbnail = $this->scan_image_id();

		if ( ! $this->thumbnail ) :
			$this->thumbnail = $this->scan_for_gallery();
		endif;

		if ( ! $this->thumbnail ) :
			$this->thumbnail = $this->scan_thumb_image();
		endif;

		if ( ! $this->thumbnail && isset( $this->secondary_thumb['id'] ) ) :
			$this->thumbnail = $this->secondary_thumb['id'];
		endif;

		if ( $this->thumbnail ) :
			$this->set_post_thumbnail( $this->thumbnail );
		endif;
	}

	/**
	 * Scan post content to directly search for attachment image ID.
	 *
	 * Scan post content for image ID and return correct sized thumbnail
	 * image ID.
	 *
	 * @since  0.0.8
	 *
	 * @return (int|null) Thumbnail image id or Null ( if no image exist).
	 */
	private function scan_image_id() {
		$post = get_post();
		$content = $post->post_content;

		preg_match_all( '/class=[\'"].*?wp-image-([\d]*).*?[\'"]/i', $content, $image_id );

		if ( isset( $image_id ) && ! empty( $image_id[1] ) ) {
			foreach ( $image_id[1] as $image ) {
				if ( $this->thumbnail ) :
					break;
				else :
					$this->thumbnail = $this->check_thumbnail_id( $image );
				endif;
			}
		}
		return $this->thumbnail;
	}

	/**
	 * Scan post content for gallery shortcode and images.
	 *
	 * Scan post content for gallery then look for image ids in gallery
	 * Shortcode, if no ids found it will look for attachment images of
	 * current post.
	 *
	 * @since  0.0.5
	 *
	 * @return (int|null) Thumbnail image id or Null ( if no image exist).
	 */
	private function scan_for_gallery() {
		$post = get_post();
		$content = $post->post_content;

		if ( ! has_shortcode( $content, 'gallery' ) ) :
			return;
		endif;

		preg_match( '/\[gallery.*ids=.(.*).\]/', $content, $ids );

		if ( isset( $ids ) && ! empty( $ids[1] ) ) :
			$image_ids = explode( ',', $ids[1] );
			foreach ( $image_ids as $image_id ) {
				if ( $this->thumbnail ) :
					break;
				elseif ( ! empty( $image_id ) ) :
					$this->thumbnail = $this->check_thumbnail_id( $image_id );
				endif;
			}
			if ( $this->thumbnail ) :
				return $this->thumbnail;
			endif;
		endif;

		$attachments = new WP_Query(
			array(
				'post_parent'      => $post->ID,
				'post_status'      => 'inherit',
				'post_type'        => 'attachment',
				'post_mime_type'   => 'image',
				'order'            => 'ASC',
				'orderby'          => 'menu_order ID',
				'fields'           => 'ids',
			)
		);
		if ( $attachments->have_posts() ) :
			foreach ( $attachments->posts as $image_id ) {
				if ( $this->thumbnail ) :
					break;
				else :
					$this->thumbnail = $this->check_thumbnail_id( $image_id );
				endif;
			}
		endif;

		return $this->thumbnail;
	}

	/**
	 * Scan post content to directly search for images.
	 *
	 * Scan post content for images and return correct sized thumbnail
	 * image ID.
	 *
	 * @since  0.0.5
	 *
	 * @return (int|null) Thumbnail image id or Null ( if no image exist).
	 */
	private function scan_thumb_image() {
		$post = get_post();
		$content = $post->post_content;

		preg_match_all( '|<img.*?src=[\'"](.*?)[\'"].*?>|i', $content, $matches );

		if ( isset( $matches ) && ! empty( $matches[1] ) ) {
			foreach ( $matches[1] as $image_url ) {
				if ( $this->thumbnail ) :
					break;
				else :
					$thumb_id = $this->get_attachment_id_by_url( $image_url );
					$this->thumbnail = $this->check_thumbnail_id( $thumb_id );
				endif;
			}
		}

		return $this->thumbnail;
	}

	/**
	 * Check if thumbnail size is correct.
	 *
	 * @since  0.0.5
	 *
	 * @param int $id Thumbnail ID.
	 * @return (int|null) Thumbnail image id or Null.
	 */
	private function check_thumbnail_id( $id ) {
		if ( ! $id ) :
			return null;
		endif;

		$image = wp_get_attachment_image_src( $id, $this->thumb_size, true );
		if ( ! $image ) :
			return null;
		endif;

		list( $src, $width, $height ) = $image;
		if ( $this->min_size['w'] > $width || $this->min_size['h'] > $height ) :
			/*
			 * If current image is smaller than minimum required size but bigger than
			 * all previously checked images for the post, we will keep this image
			 * until we find an image bigger than this OR we check all images in
			 * post content.
			 *
			 * If required size image not available in current post than this secondary
			 * image (largest available but smaller than required) will be used as post
			 * thumbnail.
			 */
			$wh = $width * $height;
			if ( ! isset( $this->secondary_thumb['wh'] ) ) :
				$this->secondary_thumb['wh'] = 0;
			endif;

			if ( $this->secondary_thumb['wh'] < $wh ) :
				$this->secondary_thumb = array( 'id' => $id, 'wh' => $wh );
			endif;

			return null;
		endif;

		return $id;
	}

	/**
	 * Get image attachment ID from URL.
	 *
	 * @since 0.0.5
	 *
	 * @param str $thumb_url Thumbnail URL.
	 * @return (int|null) Thumbnail image id or Null.
	 */
	private function get_attachment_id_by_url( $thumb_url ) {
		$thumb_id = 0;
		$dir = wp_upload_dir();
		if ( false === strpos( $thumb_url, $dir['baseurl'] . '/' ) ) :
			return null;
		endif;

		$file = basename( $thumb_url );
		$query = new WP_Query( array(
			'post_type'   => 'attachment',
			'post_status' => 'inherit',
			'fields'      => 'ids',
			'meta_query'  => array(
				array(
					'value'   => $file,
					'compare' => 'LIKE',
					'key'     => '_wp_attachment_metadata',
				),
			),
		) );

		if ( $query->have_posts() ) :
			foreach ( $query->posts as $post_id ) {
				$meta = wp_get_attachment_metadata( $post_id );
				$original_image_file = basename( $meta['file'] );
				$cropped_image_files = wp_list_pluck( $meta['sizes'], 'file' );
				if ( $original_image_file === $file || in_array( $file, $cropped_image_files, true ) ) :
					$thumb_id = $post_id;
					break;
				endif;
			}
		endif;

		return $thumb_id;
	}

	/**
	 * Set a post thumbnail.
	 *
	 * @since 0.0.8
	 *
	 * @param int $thumbnail_id Thumbnail ID.
	 * @return (int|bool) True on success, false on failure.
	 */
	private function set_post_thumbnail( $thumbnail_id ) {
		$post = get_post();
		if ( ! in_array( $this->thumb_size, suri_get_thumbnail_sizes(), true ) ) :
			return false;
		endif;

		$thumbnail_id = absint( $thumbnail_id );
		if ( $post && $thumbnail_id && get_post( $thumbnail_id ) ) :
			if ( wp_get_attachment_image( $thumbnail_id, 'thumbnail' ) ) :
				$this->thumb_size = sanitize_text_field( $this->thumb_size );
				$thumb = array( 'id' => $thumbnail_id, 'size' => $this->thumb_size );
				return update_post_meta( $post->ID, 'suri_thumbnail_id', $thumb );
			else :
				return delete_post_meta( $post->ID, 'suri_thumbnail_id' );
			endif;
		endif;
		return false;
	}
}
