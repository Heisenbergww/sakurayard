<?php
/**
 * The template part for displaying footer meta information for current post
 *
 * @package Suri
 * @since 0.0.6
 */

?>

<footer class="entry-footer">

	<?php $categories_list = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'suri' ) ); ?>
	<?php if ( $categories_list ) : ?>
		<span<?php suri_attr( 'cat-links' ) ?>>
			<?php printf( esc_html__( 'Categories ', 'suri' ) ); ?>
			<?php echo $categories_list; // WPCS : xss ok.?>
		</span>
	<?php endif; ?>

	<?php $tags_list = get_the_tag_list( '', _x( ', ', 'Used between list items, there is a space after the comma.', 'suri' ) ); ?>
	<?php if ( $tags_list ) : ?>
		<span<?php suri_attr( 'tags-links' ) ?>>
			<?php printf( esc_html__( 'Tags ', 'suri' ) ); ?>
			<?php echo $tags_list; // WPCS : xss ok.?>
		</span>
	<?php endif;?>

</footer><!-- .entry-footer -->
