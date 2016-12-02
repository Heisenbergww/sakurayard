<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Suri
 * @since 0.0.1
 */

get_header(); ?>

	<div id="primary"<?php suri_attr( 'content-area' ); ?>>
		<main id="main" role="main"<?php suri_attr( 'site-main' ); ?>>

			<section class="error-404 not-found">
				<header<?php suri_attr( 'page-header' ); ?>>
					<h1<?php suri_attr( 'page-title' ); ?>>
						<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'suri' ); ?>
					</h1>
				</header><!-- .page-header -->

				<div<?php suri_attr( 'page-content' ); ?>>
					<h2><?php esc_html_e( 'We tried to find it, but it\'s just not to be found.', 'suri' ); ?></h2>
					<p><?php esc_html_e( 'You might ensure the URL is spelled correctly, or if you followed a link here please let us know. Please try a search to reach your desired destination.', 'suri' ); ?></p>
					<?php get_search_form();?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
