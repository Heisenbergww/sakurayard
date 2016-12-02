<?php
/**
 * Template part for displaying primary navigation menu
 *
 * @package Suri
 * @since 0.0.1
 */

?>
<nav id="main-navigation" role="navigation"<?php suri_attr( 'main-navigation' );?>>
	<h2 class="screen-reader-text"><?php printf( esc_html__( 'Main Navigation', 'suri' ) );?></h2>
	<?php get_search_form(); ?>

	<button aria-controls="primary-menu" aria-expanded="false"<?php suri_attr( 'menu-toggle' );?>>
		<?php esc_html_e( 'Menu', 'suri' ); ?>
	</button>

	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'primary',
			'menu_id'        => 'primary-menu',
			'menu_class'     => 'nav-menu',
			'container'      => false,
		)
	);
	?>
</nav><!-- #main-navigation -->
