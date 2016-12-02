<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Suri
 * @since 0.0.1
 */

get_header();
?>

	<div id="primary"<?php suri_attr( 'content-area' ); ?>>

		<?php
		/** This action is documented in /index.php */
		do_action( 'suri_hook_before_main_content' ); ?>

		<main id="main" role="main"<?php suri_attr( 'site-main' ); ?>>

			<?php
			if ( have_posts() ) : ?>

				<header<?php suri_attr( 'page-header' ); ?>>
					<?php
					the_archive_title( sprintf( '<h1%1$s>', suri_get_attr( 'page-title' ) ), '</h1>' );
					the_archive_description( sprintf( '<div%1$s>', suri_get_attr( 'taxonomy-description' ) ), '</div>' );
					?>
				</header><!-- .page-header -->
				
				<?php
				/** This action is documented in /index.php */
				do_action( 'suri_hook_before_content_while' );

				while ( have_posts() ) : the_post();

					/**
					 * Include the Post-Format-specific template for the content.
					 */
					get_template_part( 'template-parts/content', get_post_format() );
				endwhile;

				/** This action is documented in /index.php */
				do_action( 'suri_hook_after_content_while' );

			else :

				/**
				 * Include template if no content is available.
				 */
				get_template_part( 'template-parts/content', 'none' );
			endif;?>

		</main><!-- #main -->

		<?php
		/** This action is documented in /index.php */
		do_action( 'suri_hook_after_main_content' ); ?>

	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
