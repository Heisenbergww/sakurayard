<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Suri
 * @since 0.0.8
 */

?>

<aside id="secondary" role="complementary"<?php suri_attr( 'primary-sidebar' ); ?>>
	<h2 class="screen-reader-text"><?php echo esc_html__( 'Primary Sidebar', 'suri' ); ?></h2>
	<button aria-controls="secondary" aria-expanded="false"<?php suri_attr( 'sidebar-toggle' );?>></button>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
