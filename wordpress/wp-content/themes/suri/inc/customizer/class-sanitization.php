<?php
/**
 * Customizer sanitization
 *
 * Handles santization of theme customizer options.
 *
 * @package Suri
 * @since 0.0.1
 */

/**
 * Sanitization callback functions library for theme customizer.
 *
 * @since 0.0.4
 */
abstract class Suri_Sanitization {
	/**
	 * Abstract sanitization function.
	 *
	 * Keep abstract function public as it will be called by 'sanitize_callback'
	 * wordpress filter from outside of the class.
	 *
	 * @since 0.0.4
	 * @access public
	 *
	 * @param  Mixed				$option  Selected customizer option.
	 * @param  WP_Customize_Setting $setting Setting instance.
	 */
	abstract public function sanitization( $option, $setting );

	/**
	 * Returns sanitized customizer options.
	 *
	 * @since 0.0.4
	 * @access protected
	 *
	 * @param  Mixed				$option  Selected customizer option.
	 * @param  WP_Customize_Setting $setting Setting instance.
	 * @return Mixed Returns sanitized value.
	 */
	protected function get_sanitized_value( $option, $setting ) {
		$type = $setting->manager->get_control( $setting->id )->type;
		switch ( $type ) {
			case 'select':
				$sanitized_value = $this->sanitize_select( $option, $setting );
				break;

			case 'checkbox':
				$sanitized_value = $this->sanitize_checkbox( $option );
				break;

			case 'number':
				$sanitized_value = $this->sanitize_number( $option, $setting );
				break;

			case 'text':
				$sanitized_value = $this->sanitize_text( $option );
				break;

			case 'textarea':
				$sanitized_value = $this->sanitize_textarea( $option );
				break;

			case 'url':
				$sanitized_value = $this->sanitize_url( $option );
				break;

			default:
				$sanitized_value = $settings->default;
				break;
		}
		return $sanitized_value;
	}

	/**
	 * Sanitize select choices.
	 *
	 * @since 0.0.4
	 * @access private
	 *
	 * @param str                  $option  Customizer Option selected.
	 * @param WP_Customize_Setting $setting Setting instance.
	 * @return string
	 */
	private function sanitize_select( $option, $setting ) {
		$choices = $setting->manager->get_control( $setting->id )->choices;
		if ( array_key_exists( $option, $choices ) ) :
			return $option;
		else :
			return $setting->default;
		endif;
	}

	/**
	 * Sanitize text.
	 *
	 * @since 0.0.4
	 * @access private
	 *
	 * @param str $option text.
	 * @return string
	 */
	private function sanitize_text( $option ) {
		return sanitize_text_field( $option );
	}

	/**
	 * Sanitize textarea.
	 *
	 * @since 0.1.4
	 * @access private
	 *
	 * @param str $option textarea.
	 * @return string
	 */
	private function sanitize_textarea( $option ) {
		return wp_kses_post( $option );
	}

	/**
	 * Sanitize url.
	 *
	 * @since 0.1.4
	 * @access private
	 *
	 * @param str $option url.
	 * @return string
	 */
	private function sanitize_url( $option ) {
		return esc_url_raw( $option );
	}

	/**
	 * Sanitize and Validate excerpt length
	 *
	 * @since 0.0.4
	 * @access private
	 *
	 * @param int                  $option  excerpt length.
	 * @param WP_Customize_Setting $setting Setting instance.
	 * @return integer
	 */
	private function sanitize_number( $option, $setting ) {
		$option = absint( $option );
		if ( $option ) :
			return $option;
		else :
			return $setting->default;
		endif;
	}

	/**
	 * Validate checkbox value to be '1'
	 *
	 * @since  0.0.4
	 * @access private
	 *
	 * @param  bool $option checkbox value.
	 * @return bool
	 */
	private function sanitize_checkbox( $option ) {
		if ( 1 == $option ) : // WPCS: loose comparison ok.
			return 1;
		else :
			return '';
		endif;
	}
}
