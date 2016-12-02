<?php
/**
 * Active callback functions
 *
 * Library of active callback functions for theme customizer.
 *
 * @link https://codex.wordpress.org/Theme_Customization_API
 *
 * @package Suri
 * @since 0.0.1
 */

/**
 * Theme option's active callback conditional functions library
 *
 * @since 0.0.6
 */
class Suri_Active_Callback {

	/**
	 * Constructor method intentionally left blank.
	 *
	 * @since 0.0.6
	 */
	private function __construct() {}

	/**
	 * Check if display excerpt option selected.
	 *
	 * @since 0.0.1
	 *
	 * @param object $control whole wp_customize_control object.
	 * @return bool
	 */
	public static function is_display_excerpt( $control ) {
		if ( 'excerpt' === $control->manager->get_setting( 'suri_excerpt_option' )->value() ) :
			return true;
		else :
			return false;
		endif;
	}

	/**
	 * Check if both display excerpt and display thumbnail options are selected.
	 *
	 * @since 0.0.5
	 *
	 * @param object $control whole wp_customize_control object.
	 * @return bool
	 */
	public static function is_display_thumb( $control ) {
		if ( ( 'excerpt' === $control->manager->get_setting( 'suri_excerpt_option' )->value() )
			&& ( 1 === $control->manager->get_setting( 'suri_thumbnail_display' )->value() ) ) :
			return true;
		else :
			return false;
		endif;
	}

	/**
	 * Check if both display excerpt and display thumbnail options are selected.
	 *
	 * @since 0.0.5
	 *
	 * @param object $control whole wp_customize_control object.
	 * @return bool
	 */
	public static function is_display_cta( $control ) {
		if ( 1 === $control->manager->get_setting( 'suri_cta_on_home' )->value() ) :
			return true;
		else :
			return false;
		endif;
	}
}
