<?php
/**
 * Template part for displaying page content
 *
 * @package Suri
 * @since 0.0.1
 */

/** This action is documented in template-parts/content.php */
do_action( 'suri_hook_before_entry' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?><?php suri_attr( 'post' ); ?>>

	<?php
	/** This action is documented in template-parts/content.php */
	do_action( 'suri_hook_on_top_of_entry' ); ?>

	<header<?php suri_attr( 'entry-header' ); ?>>
		<?php the_title( sprintf( '<h1%1$s>', suri_get_attr( 'entry-title' ) ), '</h1>' );?>
	</header><!-- .entry-header -->

	<?php
	/** This action is documented in template-parts/content.php */
	do_action( 'suri_hook_before_entry_content' ); ?>

	<div<?php suri_attr( 'entry-content' ); ?>>

		<?php
		the_content( sprintf(
			esc_html__( 'Continue reading %s', 'suri' ),
			the_title( '<span class="screen-reader-text">', '</span>', false )
		) );

		/*
		 * Displays page-links for paginated pages (i.e. if the <!--nextpage-->
		 * Quicktag has been used for one or more times in a single page).
		 */
		wp_link_pages( array(
			'before' => '<div' . suri_get_attr( 'page-links' ) . '>' . esc_html__( 'Pages:', 'suri' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<?php
	/** This action is documented in template-parts/content.php */
	do_action( 'suri_hook_after_entry_content' ); ?>

	<footer<?php suri_attr( 'entry-footer' ); ?>>
		<?php edit_post_link( esc_html__( 'Edit page', 'suri' ), '<span' . suri_get_attr( 'edit-link' ) . '>', '</span>' );?>
	</footer><!-- .entry-footer -->

	<?php
	/** This action is documented in template-parts/content.php */
	do_action( 'suri_hook_bottom_of_entry' ); ?>

</article><!-- #post-## -->

<?php
/** This action is documented in template-parts/content.php */
do_action( 'suri_hook_after_entry' );
