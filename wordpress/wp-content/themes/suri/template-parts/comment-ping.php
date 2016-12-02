<?php
/**
 * The template part for displaying post pingbacks and trackbacks
 *
 * @link https://themeshaper.com/2012/11/04/the-wordpress-theme-comments-template/
 *
 * @package Suri
 * @since 0.0.8
 */

$url = get_comment_author_url();
$author = get_comment_author();

?>

<li<?php suri_attr( 'pingback' ); ?>>
	<p>
		<?php printf( esc_html__( 'Pingback:', 'suri' ) ); ?>

		<?php if ( empty( $url ) ) :?>
			<span<?php suri_attr( 'name' ) ?>><?php echo esc_html( $author );?></span>
		<?php else : ?>
			<a href="<?php echo esc_url( $url ); ?>"<?php suri_attr( 'url' )?>><span<?php suri_attr( 'name' ) ?>><?php echo esc_html( $author );?></span></a>
		<?php endif; ?>

		<?php edit_comment_link( esc_html__( '(Edit)', 'suri' ) ); ?>
	</p>

<?php // No closing 'li' is needed.  WordPress will know where to add it.
