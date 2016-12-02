<?php
/**
 * Suri Theme Customizer.
 *
 * @link https://codex.wordpress.org/Theme_Customization_API
 *
 * @package Suri
 * @since 0.0.1
 */

/**
 * Add theme modification options to Theme Customizer
 *
 * @since 0.0.3
 */
class Suri_Customizer extends Suri_Sanitization {

	/**
	 * Holds the instance of this class.
	 *
	 * @since  0.0.4
	 * @access protected
	 * @var    object
	 */
	protected static $instance = null;

	/**
	 * Hold defaults values for theme customization options.
	 *
	 * @since  0.0.4
	 * @access public
	 * @var    array
	 */
	public $defaults;

	/**
	 * Hold defaults theme settings and controls.
	 *
	 * @since  0.0.6
	 * @access public
	 * @var    array
	 */
	public $customize_controls;

	/**
	 * Hold theme customizer sections details.
	 *
	 * @since  0.0.6
	 * @access public
	 * @var    array
	 */
	public $customizer_sections;

	/**
	 * Constructor method.
	 *
	 * @since 0.0.4
	 */
	public function __construct() {
		$this->defaults = suri_get_theme_defaults( 'all' );
		$this->customizer_sections = Suri_Customizer_Data::get_theme_sections();
		$this->customize_controls = Suri_Customizer_Data::get_theme_controls();
	}

	/**
	 * Add theme modification options and postMessage support to Theme Customizer.
	 *
	 * @since 0.0.1
	 *
	 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
	 */
	public function customize_register( $wp_customize ) {
		$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
		$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

		$wp_customize->add_panel(
			'suri_theme_panel' , array(
				'title'       => esc_html__( 'Theme options', 'suri' ),
				'priority'    => 6,
				'description' => esc_html__( 'Options to customize site header structure and elements', 'suri' ),
			)
		);

		foreach ( $this->customizer_sections as $key => $value ) {
			$wp_customize->add_section( $key, $value );
		}

		foreach ( $this->customize_controls as $customize_control ) {
			$wp_customize->add_setting(
				$customize_control['settings'], array(
					'default'           => $this->defaults[ $customize_control['settings'] ],
					'sanitize_callback' => array( $this, 'sanitization' ),
				)
			);
			$wp_customize->add_control( $customize_control['settings'], $customize_control );
		}
	}

	/**
	 * Wrapper function for sanitization class.
	 *
	 * @since 0.0.4
	 *
	 * @param  Mixed                $option  Selected customizer option.
	 * @param  WP_Customize_Setting $setting Setting instance.
	 * @return Mixed Returns sanitized value.
	 */
	public function sanitization( $option, $setting ) {
		return $this->get_sanitized_value( $option, $setting );
	}

	/**
	 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
	 *
	 * @since 0.0.4
	 */
	public function customize_preview_js() {
		wp_enqueue_script(
			'suri_customizer',
			get_template_directory_uri() . '/resources/js/customizer.js',
			array( 'customize-preview' ),
			'0.0.2',
			true
		);
	}

	/**
	 * Returns the instance.
	 *
	 * @since  0.0.4
	 *
	 * @return object Customizer instance.
	 */
	public static function getInstance() {
		null === self::$instance and self::$instance = new self;
		return self::$instance;
	}
}

add_action( 'customize_register'     , array( Suri_Customizer::getInstance(), 'customize_register' ) );
add_action( 'customize_preview_init' , array( Suri_Customizer::getInstance(), 'customize_preview_js' ) );
