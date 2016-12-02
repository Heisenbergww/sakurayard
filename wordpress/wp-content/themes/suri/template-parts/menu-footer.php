<?php
/**
 * Template part for displaying footer navigation menu
 *
 * @package Suri
 * @since 0.0.1
 */

?>
<nav id="footer-menu" role="navigation"<?php suri_attr( 'footer-menu' );?>>
	<h2 class="screen-reader-text"><?php printf( esc_html__( 'Footer Menu', 'suri' ) );?></h2>
	<?php
	wp_nav_menu(
		array(
			'depth'          => 1,
			'theme_location' => 'footer',
			'menu_id'        => 'footer-nav',
			'menu_class'     => 'nav-menu',
			'container'      => false,
		)
	);
	?>
</nav><!-- #footer-menu -->
