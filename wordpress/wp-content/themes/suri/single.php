<?php
/**
 * The template for displaying all single blog posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Suri
 * @since 0.0.1
 */

get_header(); ?>

	<div id="primary"<?php suri_attr( 'content-area' ); ?>>

		<?php
		/** This action is documented in /index.php */
		do_action( 'suri_hook_before_main_content' ); ?>

		<main id="main" role="main"<?php suri_attr( 'site-main' ); ?>>

			<?php
			/** This action is documented in /index.php */
			do_action( 'suri_hook_before_content_while' );

			while ( have_posts() ) : the_post();

				/**
				 * Include the Post-Format-specific template for the content.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endwhile; // End of the loop.

			/** This action is documented in /index.php */
			do_action( 'suri_hook_after_content_while' );
			?>

		</main><!-- #main -->

		<?php
		/** This action is documented in /index.php */
		do_action( 'suri_hook_after_main_content' ); ?>

	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
