<?php
/**
 * Template part for displaying custom header
 *
 * @package Suri
 * @since 0.0.7
 */

?>

<img<?php suri_attr( 'custom-header' );?>
	src="<?php header_image(); ?>"
	width="<?php echo absint( get_custom_header()->width ); ?>"
	height="<?php echo absint( get_custom_header()->height ); ?>"
	alt=""
>
