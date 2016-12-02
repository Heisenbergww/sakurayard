<?php
/**
 * The template part for displaying post thumbnails
 *
 * @package Suri
 * @since 0.0.6
 */

?>

<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"<?php suri_attr( 'post-thumbnail' ); ?> aria-hidden="true">

	<?php the_post_thumbnail( get_theme_mod( 'suri_thumbnail_size', suri_default_thumb_size() ), array(
			'alt' => the_title_attribute( 'echo=0' ),
	) ); ?>

</a><?php
