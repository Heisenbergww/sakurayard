<?php
/**
 * The template part for displaying post comment title
 *
 * @package Suri
 * @since 0.0.6
 */

?>

<h2<?php suri_attr( 'comments-title' ) ?>>
	<?php
	printf( // WPCS: xss ok.
		_nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;',
		get_comments_number(), 'comments title', 'suri' ), number_format_i18n( get_comments_number() ),
		'<span>' . get_the_title() . '</span>'
	);
	?>
</h2>
