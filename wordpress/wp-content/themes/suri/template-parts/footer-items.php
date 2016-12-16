<?php
/**
 * Template part for displaying footer items
 *
 * @package Suri
 * @since 0.0.6
 */

$suri_copyright_info = get_theme_mod( 'suri_copyright', suri_get_theme_defaults( 'suri_copyright' ) );
?>

<div<?php suri_attr( 'footer-items' ); ?>>

	<div<?php suri_attr( 'copyright-text' ); ?>>
		<?php if ( $suri_copyright_info ) : ?>
			<p><?php echo implode( '<br/>', array_map( 'esc_textarea', explode( "\n", $suri_copyright_info ) ) ); ?></p>
		<?php else : ?>
			<p><?php bloginfo(); ?> &copy; <?php the_date( 'Y' ); ?> . <?php esc_html_e( 'All Rights Reserved', 'suri' ); ?></p>
		<?php endif; ?>
	</div><!-- .copyright-text -->

	<?php if ( '' === get_theme_mod( 'suri_site_credit', suri_get_theme_defaults( 'suri_site_credit' ) ) ) : ?>
		<div<?php suri_attr( 'site-credit' ); ?>>
			<?php
			printf( esc_html__( 'Theme by %1$s', 'suri' ),
				'<a href="/" rel="nofollow">SakuraYard</a>'
			);
			?>
		</div><!-- .site-credit -->
	<?php endif; ?>

</div><!-- .footer-items -->
