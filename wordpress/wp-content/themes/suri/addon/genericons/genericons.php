<?php
/**
 * Add Genericons
 *
 * @link https://genericons.com/
 *
 * @package Suri
 * @since 0.1.2
 */

/**
 * Add support for Genericons.
 *
 * @since 0.1.2
 */
class Suri_Genericons {
	/**
	 * Constructor method intentionally left blank.
	 */
	private function __construct() {}

	/**
	 * Add actions for genericons.
	 *
	 * @since 0.1.2
	 */
	public static function initiate() {
		add_action( 'wp_enqueue_scripts'     , array( __CLASS__, 'enqueue_genericons' ) );
	}

	/**
	 * Enqueue genericons stylesheet.
	 *
	 * @since 0.1.2
	 */
	public static function enqueue_genericons() {
		// Add Genericons, used in the main stylesheet.
		wp_enqueue_style( 'genericons', get_template_directory_uri() . '/resources/fonts/genericons/genericons.css', array(), '3.4.1' );
	}
}

Suri_Genericons::initiate();
