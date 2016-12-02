<?php
/**
 * Suri Theme back compat functionality
 *
 * Prevents Suri from running on WordPress versions prior to 4.1,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.1.
 *
 * This file incorporates code from Twenty Fifteen WordPress Theme,
 * Copyright 2014-2016 WordPress.org & Automattic.com Twenty Fifteen is
 * distributed under the terms of the GNU GPL.
 *
 * @package Suri
 * @since 0.0.8
 */

/**
 * Prevent switching to Suri on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since 0.0.8
 */
function suri_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );

	unset( $_GET['activated'] );

	add_action( 'admin_notices', 'suri_upgrade_notice' );
}
add_action( 'after_switch_theme', 'suri_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Suri on WordPress versions prior to 4.1.
 *
 * @since 0.0.8
 *
 * @global string $wp_version WordPress version.
 */
function suri_upgrade_notice() {
	$message = sprintf( esc_html__( 'Suri requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'suri' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.1.
 *
 * @since 0.0.8
 *
 * @global string $wp_version WordPress version.
 */
function suri_customize() {
	wp_die( sprintf( esc_html__( 'Suri requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'suri' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'suri_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.1.
 *
 * @since 0.0.8
 *
 * @global string $wp_version WordPress version.
 */
function suri_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( esc_html__( 'Suri requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'suri' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'suri_preview' );
