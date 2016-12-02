<?php
/**
 * Customizer data
 *
 * Theme Customizer's sections and control field data.
 *
 * @package Suri
 * @since 0.0.1
 */

/**
 * Theme option's active callback conditional functions library
 *
 * @since 0.0.6
 */
class Suri_Customizer_Data {

	/**
	 * Constructor intentionally left blank.
	 *
	 * @since 0.0.6
	 */
	private function __construct() {}

	/**
	 * Set theme customizer sections.
	 *
	 * @since 0.0.6
	 *
	 * @return array Returns array of default theme customizer sections.
	 */
	public static function get_theme_sections() {
		/**
		 * Filter theme customizer section array.
		 *
		 * @since 0.0.6
		 */
		$suri_sections = apply_filters(
			'suri_theme_sections', array(
				'suri_content_section' => array(
					'title'       => esc_html__( 'Post content', 'suri' ),
					'panel'       => 'suri_theme_panel',
					'description' => esc_html__( 'Options to change content display options', 'suri' ),
				),
				'suri_layout_section'  => array(
					'title'       => esc_html__( 'Content layout', 'suri' ),
					'panel'       => 'suri_theme_panel',
					'description' => esc_html__( 'Options to change content/sidebar display and positioning', 'suri' ),
				),
				'suri_footer_section'  => array(
					'title'       => esc_html__( 'Site Footer', 'suri' ),
					'panel'       => 'suri_theme_panel',
					'description' => esc_html__( 'Options to change footer text and navigation', 'suri' ),
				),
			)
		);
		return $suri_sections;
	}

	/**
	 * Set theme customizer controls and settings.
	 *
	 * @since 0.0.6
	 *
	 * @return array Returns array of default theme controls and settings.
	 */
	public static function get_theme_controls() {
		/**
		 * Filter theme customizer controls and settings.
		 *
		 * @since 0.0.6
		 */
		$suri_controls = apply_filters(
			'suri_theme_controls', array(
				array(
					'label'       => esc_html__( 'Header layout', 'suri' ),
					'section'     => 'suri_layout_section',
					'settings'    => 'suri_header_layout',
					'type'        => 'select',
					'choices'     => array(
						'content-center'    => esc_html__( 'Content-Center', 'suri' ),
						'content-align'     => esc_html__( 'Content-Aligned', 'suri' ),
					),
				),
				array(
					'label'       => esc_html__( 'Content layout', 'suri' ),
					'section'     => 'suri_layout_section',
					'settings'    => 'suri_layout',
					'type'        => 'select',
					'choices'     => array(
						'content-sidebar'   => esc_html__( 'Content-Sidebar', 'suri' ),
						'sidebar-content'   => esc_html__( 'Sidebar-Content', 'suri' ),
						'only-content'      => esc_html__( 'Only Content (No sidebar)', 'suri' ),
					),
				),
				array(
					'label'       => esc_html__( 'Hide sidebar on Home page', 'suri' ),
					'section'     => 'suri_layout_section',
					'settings'    => 'suri_hide_sidebar_on_home',
					'type'        => 'checkbox',
				),
				array(
					'label'       => esc_html__( 'Display header image on home page only', 'suri' ),
					'section'     => 'suri_content_section',
					'settings'    => 'suri_header_on_home_only',
					'type'        => 'checkbox',
				),
				array(
					'label'       => esc_html__( 'Excerpt or full content', 'suri' ),
					'section'     => 'suri_content_section',
					'settings'    => 'suri_excerpt_option',
					'type'        => 'select',
					'choices'     => array(
						'excerpt'           => esc_html__( 'Excerpt', 'suri' ),
						'content'           => esc_html__( 'Full content', 'suri' ),
					),
				),
				array(
					'label'       => esc_html__( 'Excerpt Length (from 1 word to 500 words)', 'suri' ),
					'section'     => 'suri_content_section',
					'settings'    => 'suri_excerpt_length',
					'type'        => 'number',
					'active_callback' => array( 'Suri_Active_Callback', 'is_display_excerpt' ),
				),
				array(
					'label'       => esc_html__( 'Change excerpt Read More text', 'suri' ),
					'section'     => 'suri_content_section',
					'settings'    => 'suri_excerpt_teaser',
					'description' => esc_html__( 'default text will be: Continue Reading... ', 'suri' ),
					'type'        => 'text',
					'active_callback' => array( 'Suri_Active_Callback', 'is_display_excerpt' ),
				),
				array(
					'label'       => esc_html__( 'Display thumbnails for post', 'suri' ),
					'section'     => 'suri_content_section',
					'settings'    => 'suri_thumbnail_display',
					'type'        => 'checkbox',
					'active_callback' => array( 'Suri_Active_Callback', 'is_display_excerpt' ),
				),
				array(
					'label'       => esc_html__( 'Display thumbnails on Single post', 'suri' ),
					'section'     => 'suri_content_section',
					'settings'    => 'suri_single_thumbnail',
					'type'        => 'checkbox',
					'active_callback' => array( 'Suri_Active_Callback', 'is_display_excerpt' ),
				),
				array(
					'label'       => esc_html__( 'Thumbnail Size', 'suri' ),
					'section'     => 'suri_content_section',
					'settings'    => 'suri_thumbnail_size',
					'type'        => 'select',
					'choices'     => suri_get_thumbnail_sizes(),
					'active_callback' => array( 'Suri_Active_Callback', 'is_display_thumb' ),
				),
				array(
					'label'       => esc_html__( 'Don\'t use Web fonts', 'suri' ),
					'section'     => 'suri_content_section',
					'settings'    => 'suri_no_web_fonts',
					'type'        => 'checkbox',
				),
				array(
					'label'       => esc_html__( 'Copyright text', 'suri' ),
					'section'     => 'suri_footer_section',
					'settings'    => 'suri_copyright',
					'description' => esc_html__( 'Change default copyright text', 'suri' ),
					'type'        => 'textarea',
				),
				array(
					'label'       => esc_html__( 'Hide Credit text', 'suri' ),
					'section'     => 'suri_footer_section',
					'settings'    => 'suri_site_credit',
					'description' => esc_html__( 'NOTE : Showing author credit info is optional.', 'suri' ),
					'type'        => 'checkbox',
				),
			)
		);
		return $suri_controls;
	}
}
