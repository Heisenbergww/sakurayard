<?php
/**
 * Display post content
 *
 * Template part file that contains the default Post content,
 * including Post header, Post entry, and Post footer.
 *
 * @package Suri
 * @since 0.0.1
 */

/**
 * Fires immediately before post content.
 *
 * @since 0.0.1
 */
do_action( 'suri_hook_before_entry' ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?><?php suri_attr( 'post' ); ?>>

	<?php
	/**
	 * Fires immediately after opening of post content.
	 *
	 * @since 0.0.1
	 */
	do_action( 'suri_hook_on_top_of_entry' ); ?>

	<header<?php suri_attr( 'entry-header' ); ?>>

		<?php if ( is_single() ) :
			the_title( sprintf( '<h1%1$s>', suri_get_attr( 'entry-title' ) ), '</h1>' ); ?>
		<?php else :
			the_title( sprintf( '<h2%1$s><a href="%2$s" rel="bookmark">', suri_get_attr( 'entry-title' ), esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php endif; ?>

		<?php
		/**
		 * Fires immediately before closing of entry header.
		 *
		 * @since 0.0.1
		 */
		do_action( 'suri_hook_for_entry_content_header' ); ?>

	</header><!-- .entry-header -->

	<?php
	/**
	 * Fires immediately before entry content.
	 *
	 * @since 0.0.1
	 */
	do_action( 'suri_hook_before_entry_content' ); ?>

	<div<?php suri_attr( 'entry-content' ); ?>>

		<?php

		/*
		 * Display excerpt if : It is home or archive page and show full content
		 * option is not selected from customizer options and post format is not
		 * aside, quote or status. Else display full content.
		 */
		if ( ( is_home() || is_archive() ) && 'content' != get_theme_mod( 'suri_excerpt_option', suri_get_theme_defaults( 'suri_excerpt_option' ) ) // WPCS: loose comparison ok.
						&& ! has_post_format( array( 'aside', 'quote', 'status', 'video', 'audio', 'gallery' ) ) ) :
			the_excerpt();
		else :
			the_content( sprintf(
				esc_html__( 'Continue reading %s', 'suri' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			/*
			 * Displays page-links for paginated posts (i.e. if the <!--nextpage-->
			 * Quicktag has been used for one or more times in a single post).
			 */
			wp_link_pages( array(
				'before' => '<div' . suri_get_attr( 'page-links' ) . '>' . esc_html__( 'Pages:', 'suri' ),
				'after'  => '</div>',
			) );
		endif;
		?>

	</div><!-- .entry-content -->

	<?php
	/**
	 * Fires immediately after entry content.
	 *
	 * @since 0.0.1
	 */
	do_action( 'suri_hook_after_entry_content' );

	/**
	 * Fires immediately before closing of post content.
	 *
	 * @since 0.0.1
	 */
	do_action( 'suri_hook_bottom_of_entry' ); ?>

</article><!-- #post-## -->

<?php
/**
 * Fires immediately after post content.
 *
 * @since 0.0.1
 */
do_action( 'suri_hook_after_entry' );
