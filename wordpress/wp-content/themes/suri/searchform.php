<?php
/**
 * Display search form
 *
 * @link https://developer.wordpress.org/reference/functions/get_search_form
 *
 * @package Suri
 * @since 0.0.1
 */

?>

<form role="search" method="get"<?php suri_attr( 'search-form' ); ?> action="<?php echo esc_url( home_url( '/' ) ) ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'suri' ) ?></span>
		<input type="search"<?php suri_attr( 'search-field' ); ?> placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'suri' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'suri' ) ?>" />
	</label>
	<input type="submit"<?php suri_attr( 'search-submit' ); ?> value="<?php echo esc_attr_x( 'Search', 'submit button', 'suri' ) ?>" />
</form>
