<?php
/**
 * Template part for displaying footer widgets
 *
 * @package Suri
 * @since 0.0.1
 */

?>

<div<?php suri_attr( 'footer-widgets' ); ?> role="complementary">

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>

		<div<?php suri_attr( 'footer-widget' ); ?>>
			<?php dynamic_sidebar( 'footer-1' ); ?>
		</div>

	<?php endif; ?>

	<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>

		<div<?php suri_attr( 'footer-widget' ); ?>>
			<?php dynamic_sidebar( 'footer-2' ); ?>
		</div>
	
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
		
		<div<?php suri_attr( 'footer-widget' ); ?>>
			<?php dynamic_sidebar( 'footer-3' ); ?>
		</div>
	
	<?php endif; ?>

</div>
