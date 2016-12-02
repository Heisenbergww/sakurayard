<?php
/**
 * Styling of header image and text
 *
 * @package Suri
 * @since 0.0.1
 */

if ( ! function_exists( 'suri_header_style' ) ) :

	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @since 0.0.1
	 */
	function suri_header_style() {
		$header_text_color = get_header_textcolor();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: HEADER_TEXTCOLOR.
		 */
		if ( HEADER_TEXTCOLOR === $header_text_color ) :
			return;
		endif;

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
			<?php
			// Has the text been hidden?
			if ( ! display_header_text() ) :
			?>
			.title-area {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}
			<?php
			// If the user has set a custom color for the text use that.
			else :
			?>
			.site-title a,
			.site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
			<?php endif; ?>
		</style>
		<?php
	}
endif;
