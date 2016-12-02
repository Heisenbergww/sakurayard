<?php
/**
 * Template part for displaying header navigation menu
 *
 * @package   suri
 * @license   GPLv2 or later <http://www.gnu.org/licenses/gpl-2.0.html>
 * @author    Suri Mohnot <contact@surimohnot.me>
 * @since     0.0.1
 */

?>
<nav id="header-menu" role="navigation"<?php suri_attr( 'header-menu' );?>>
	<h2 class="screen-reader-text"><?php printf( esc_html__( 'Header Menu', 'suri' ) );?></h2>
	<button aria-controls="header-nav" aria-expanded="false"<?php suri_attr( 'menu-toggle' );?>>
		<?php esc_html_e( 'Menu', 'suri' ); ?>
	</button>

	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'header',
			'menu_id'        => 'header-nav',
			'menu_class'     => 'nav-menu',
			'container'      => false,
		)
	);
	?>

</nav><!-- #secondary-menu -->
