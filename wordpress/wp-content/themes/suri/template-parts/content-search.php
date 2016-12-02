<?php
/**
 * Template part for displaying results in search pages
 *
 * @package Suri
 * @since 0.0.1
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?><?php suri_attr( 'post' ); ?>>
	<header<?php suri_attr( 'entry-header' ); ?>>
		<?php the_title( sprintf( '<h2%1$s><a href="%2$s" rel="bookmark">', suri_get_attr( 'entry-title' ), esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php do_action( 'suri_hook_for_entry_content_header' ); ?>
	</header><!-- .entry-header -->

	<div<?php suri_attr( 'entry-content' ); ?>>
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
</article><!-- #post-## -->
