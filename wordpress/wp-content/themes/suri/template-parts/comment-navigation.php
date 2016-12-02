<?php
/**
 * The template part for displaying post comment navigation
 *
 * @package Suri
 * @since 0.0.6
 */

$prev_link = get_previous_comments_link();
$next_link = get_next_comments_link();
?>

<nav id="comment-nav" class="comment-navigation" role="navigation">
	<h2 class="screen-reader-text"><?php printf( esc_html__( 'Comment navigation', 'suri' ) );?></h2>

	<div class="nav-links">
		<?php if ( $prev_link ) : ?>
			<div<?php suri_attr( 'nav-previous' ); ?>>
				<?php echo $prev_link; // WPCS: xss ok.?>
			</div>
		<?php endif; ?>

		<?php if ( $next_link ) : ?>
			<div<?php suri_attr( 'nav-next' ); ?>>
				<?php echo $next_link; // WPCS: xss ok.?>
			</div>
		<?php endif; ?>
	</div>
</nav>
