<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the
 * current comments and the comment form.
 *
 * @link https://codex.wordpress.org/Comments_in_WordPress
 *
 * @package Suri
 * @since 0.0.1
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) :
	return;
endif;
?>

<?php
/**
 * Fires immediately before opening comments-area.
 *
 * @since 0.0.1
 */
do_action( 'suri_hook_before_comments' );?>

<div id="comments"<?php suri_attr( 'comments-area' ); ?>>

	<?php if ( have_comments() ) : ?>

		<?php
		/**
		 * Fires immediately before comment list.
		 *
		 * @since 0.0.1
		 */
		do_action( 'suri_hook_on_top_of_comments' );?>

		<ol<?php suri_attr( 'comment-list' ); ?>>

			<?php

			/*
			 * Loop through and list the comments. Tell wp_list_comments()
			 * to use Suri_Display::comments() to format the comments which is
			 * located in inc/class-display.php.
			 */
			wp_list_comments( array(
				'callback' => array( 'Suri_Display', 'comments' ),
			) );?>

		</ol><!-- .comment-list -->

		<?php
		/**
		 * Fires immediately after comment list.
		 *
		 * @since 0.0.1
		 */
		do_action( 'suri_hook_bottom_of_comments' );?>

	<?php endif; // Check for have_comments().?>

	<?php

	// If comments are closed and there are comments, let's leave a little note, shall we??>
	<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p<?php suri_attr( 'no-comments' ); ?>><?php esc_html_e( 'Comments are closed.', 'suri' ); ?></p>
	<?php endif; ?>
	<?php comment_form();?>

</div><!-- #comments -->

<?php
/**
 * Fires immediately after closing comments-area.
 *
 * @since 0.0.1
 */
do_action( 'suri_hook_after_comments' );
