<?php
/**
 * Template part for displaying header widgets
 *
 * @package Suri
 * @since 0.1.0
 */

?>
<?php if ( is_active_sidebar( 'header' ) ) : ?>
	<div<?php suri_attr( 'header-widget' ); ?> role="complementary">
		<?php dynamic_sidebar( 'header' ); ?>
	</div>
<?php endif;
