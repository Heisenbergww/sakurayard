<?php
/**
 * The template part for displaying header meta information for current post
 *
 * @package Suri
 * @since 0.0.6
 */

?>

<div<?php suri_attr( 'entry-meta' ) ?>>
	<span<?php suri_attr( 'byline' ) ?>>
		<span<?php suri_attr( 'author' ) ?>>
			<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"<?php suri_attr( 'url' ) ?>>
				<span<?php suri_attr( 'name' ) ?>> <?php the_author(); ?></span>
			</a>
		</span>
	</span>

	<span<?php suri_attr( 'posted-on' ) ?>>
		<a href="<?php the_permalink(); ?>" rel="bookmark">
			<?php if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) :?>
				<time datetime="<?php the_modified_date( 'c' ) ?>"<?php suri_attr( 'modified-entry-date' )?>>
					<?php the_modified_date( 'M j, Y' ); ?>
				</time>
			<?php else : ?>
				<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ) ?>"<?php suri_attr( 'entry-date' )?>>
					<?php echo esc_html( get_the_date( 'M j, Y' ) ); ?>
				</time>
			<?php endif;?>
		</a>
	</span>
	
	<?php if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
		<span<?php suri_attr( 'comments-link' ) ?>>
			<?php comments_popup_link(
				sprintf( wp_kses( __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'suri' ), array( 'span' => array( 'class' => array() ) ) ), get_the_title() )
			);?>
		</span>
	<?php endif; ?>

	<?php edit_post_link( esc_html__( 'Edit', 'suri' ), '<span class="edit-link">', '</span>' );?>
</div>
