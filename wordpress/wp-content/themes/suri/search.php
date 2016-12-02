<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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

			<?php if ( have_posts() ) : ?>

				<header<?php suri_attr( 'page-header' ); ?>>
					<h1<?php suri_attr( 'page-title' ); ?>>
						<?php printf( esc_html__( 'Search Results for: %s', 'suri' ), '<span>' . get_search_query() . '</span>' ); ?>
					</h1>
				</header><!-- .page-header -->

				<?php
				/** This action is documented in /index.php */
				do_action( 'suri_hook_before_content_while' );

				while ( have_posts() ) : the_post();

					/**
					 * Include template for search results specific content.
					 */
					get_template_part( 'template-parts/content', 'search' );
				endwhile;

				/** This action is documented in /index.php */
				do_action( 'suri_hook_after_content_while' );?>

			<?php else :

				/**
				 * Include template if no content is available.
				 */
				get_template_part( 'template-parts/content', 'none' );?>
			<?php endif; ?>

		</main><!-- #main -->

		<?php
		/** This action is documented in /index.php */
		do_action( 'suri_hook_after_main_content' ); ?>

	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
