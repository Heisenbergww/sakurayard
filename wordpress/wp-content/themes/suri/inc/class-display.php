<?php
/**
 * Display site contents
 *
 * Call appropriate WordPress built-in function or include theme template file
 * to display various site contents.
 *
 * @package Suri
 * @since 0.0.1
 */

/**
 * Conditionally call display function or include template.
 *
 * @since 0.0.3
 */
class Suri_Display {

	/**
	 * Constructor method intentionally left blank.
	 */
	private function __construct() {}

	/**
	 * Display functions.
	 *
	 * @since 0.0.3
	 */
	public static function initiate() {

		// Items to be displayed on site header.
		add_action( 'wp_head'                           , array( __CLASS__, 'head' ), 0 );
		add_action( 'suri_hook_before_header'           , array( __CLASS__, 'skip_link' ) );
		add_action( 'suri_hook_bottom_of_header'        , array( __CLASS__, 'menu_primary' ) );
		add_action( 'suri_hook_bottom_of_header'        , array( __CLASS__, 'custom_header' ) );

		// Items to be displayed on site content.
		add_action( 'suri_hook_for_entry_content_header', array( __CLASS__, 'entry_header' ) );
		add_action( 'suri_hook_bottom_of_entry'         , array( __CLASS__, 'entry_footer' ) );

		add_action( 'suri_hook_after_main_content'      , array( __CLASS__, 'post_pagination' ) );
		add_action( 'suri_hook_before_entry_content'    , array( __CLASS__, 'post_thumbnails' ) );
		add_action( 'suri_hook_after_entry'             , array( __CLASS__, 'post_author' ) );
		add_action( 'suri_hook_after_entry'             , array( __CLASS__, 'post_navigation' ) );
		add_action( 'get_sidebar'                       , array( __CLASS__, 'sidebar' ) );

		// Items to be displayed in post comments section.
		add_action( 'suri_hook_on_top_of_comments'      , array( __CLASS__, 'comment_title' ) );
		add_action( 'suri_hook_on_top_of_comments'      , array( __CLASS__, 'comment_navigation' ) );
		add_action( 'suri_hook_bottom_of_comments'      , array( __CLASS__, 'comment_navigation' ) );

		// Items to be displayed on site footer.
		add_action( 'suri_hook_before_footer'           , array( __CLASS__, 'footer_widgets' ) );
		add_action( 'suri_hook_for_footer_items'        , array( __CLASS__, 'menu_footer' ) );
		add_action( 'suri_hook_for_footer_items'        , array( __CLASS__, 'footer_items' ) );

		if ( function_exists( 'the_custom_logo' ) ) :
			add_action( 'suri_hook_for_branding' , 'the_custom_logo' );
		endif;

		if ( display_header_text() ) :
			add_action( 'suri_hook_for_branding'     , array( __CLASS__, 'header_text' ) );
		endif;

		if ( has_action( 'suri_hook_for_branding' ) ) :
			add_action( 'suri_hook_for_header_items' , array( __CLASS__, 'site_branding' ) );
		endif;

		if ( is_active_sidebar( 'header' ) ) :
			add_action( 'suri_hook_for_header_extra' , array( __CLASS__, 'header_widget' ) );
		endif;

		if ( has_nav_menu( 'header' ) ) :
			add_action( 'suri_hook_for_header_extra' , array( __CLASS__, 'menu_header' ) );
		endif;

		if ( has_action( 'suri_hook_for_header_extra' ) ) :
			add_action( 'suri_hook_for_header_items' , array( __CLASS__, 'header_extra' ) );
		endif;
	}

	/**
	 * Include head contents display template.
	 *
	 * @since 0.0.8
	 */
	public static function head() {
		get_template_part( 'template-parts/site', 'head' );
	}

	/**
	 * Include skip link display template.
	 *
	 * @since 0.0.8
	 */
	public static function skip_link() {
		get_template_part( 'template-parts/header', 'skiplink' );
	}

	/**
	 * Include site branding display template.
	 *
	 * @since 0.0.8
	 */
	public static function site_branding() {
		get_template_part( 'template-parts/header', 'branding' );
	}

	/**
	 * Include header text display template.
	 *
	 * @since 0.0.3
	 */
	public static function header_text() {
		get_template_part( 'template-parts/header', 'text' );
	}

	/**
	 * Include header extra items display template.
	 *
	 * @since 0.1.0
	 */
	public static function header_extra() {
		get_template_part( 'template-parts/header', 'extra' );
	}

	/**
	 * Include header widget display template.
	 *
	 * @since 0.1.0
	 */
	public static function header_widget() {
		get_template_part( 'template-parts/header', 'widget' );
	}

	/**
	 * Include header menu display template.
	 *
	 * @since 0.1.0
	 */
	public static function menu_header() {
		get_template_part( 'template-parts/menu', 'header' );
	}

	/**
	 * Conditionally include primary menu display template.
	 *
	 * @since 0.0.3
	 */
	public static function menu_primary() {
		if ( has_nav_menu( 'primary' ) ) :
			get_template_part( 'template-parts/menu', 'primary' );
		endif;
	}

	/**
	 * Conditionally include header image display template.
	 *
	 * @since 0.0.7
	 */
	public static function custom_header() {
		if ( get_header_image() ) :
			if ( 1 === get_theme_mod( 'suri_header_on_home_only', suri_get_theme_defaults( 'suri_header_on_home_only' ) ) && ! ( is_home() || is_front_page() ) ) :
				return;
			endif;
			get_template_part( 'template-parts/header', 'custom' );
		endif;
	}

	/**
	 * Conditionally include footer menu display template.
	 *
	 * @since 0.0.6
	 */
	public static function menu_footer() {
		if ( has_nav_menu( 'footer' ) ) :
			get_template_part( 'template-parts/menu', 'footer' );
		endif;
	}

	/**
	 * Conditionally include post thumbnail display template.
	 *
	 * @since  0.0.3
	 */
	public static function post_thumbnails() {
		if ( ( is_singular() && ( 1 !== get_theme_mod( 'suri_single_thumbnail', suri_get_theme_defaults( 'suri_single_thumbnail' ) ) ) )
			|| 'excerpt' !== get_theme_mod( 'suri_excerpt_option', suri_get_theme_defaults( 'suri_excerpt_option' ) )
			|| ( 1 !== get_theme_mod( 'suri_thumbnail_display', suri_get_theme_defaults( 'suri_thumbnail_display' ) ) )
			|| ! has_post_thumbnail()
			|| has_post_format( array( 'aside', 'quote', 'status', 'video', 'audio', 'gallery' ) )
			|| post_password_required() ) :
			return;
		endif;

		get_template_part( 'template-parts/entry', 'thumbnail' );
	}

	/**
	 * Conditionally include header post meta display template.
	 *
	 * @since  0.0.3
	 */
	public static function entry_header() {
		if ( 'post' === get_post_type() ) :
			get_template_part( 'template-parts/entry', 'header' );
		endif;
	}

	/**
	 * Conditionally include footer post meta display template.
	 *
	 * @since  0.0.3
	 */
	public static function entry_footer() {
		if ( is_singular( 'post' ) ) :
			get_template_part( 'template-parts/entry', 'footer' );
		endif;
	}

	/**
	 * Conditionally include post author display template.
	 *
	 * @since  0.0.6
	 */
	public static function post_author() {
		if ( is_singular() && '' !== get_the_author_meta( 'description' ) ) :
			get_template_part( 'template-parts/entry', 'author' );
		endif;
	}

	/**
	 * Conditionally include post pagination display template.
	 *
	 * Display posts pagination on home, archive and search pages.
	 *
	 * @since  0.0.3
	 */
	public static function post_pagination() {
		if ( ! is_singular() ) :
			the_posts_pagination( array(
				'prev_text'          => esc_html__( 'Previous', 'suri' ),
				'next_text'          => esc_html__( 'Next', 'suri' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'suri' ) . ' </span>',
			) );
		endif;
	}

	/**
	 * Conditionally include post navigation display template.
	 *
	 * Display next and previous post navigation for single posts.
	 *
	 * @since  0.0.3
	 */
	public static function post_navigation() {
		if ( is_singular( 'post' ) ) :
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Next', 'suri' ) . '</span>
					<span class="screen-reader-text">' . esc_html__( 'Next post:', 'suri' ) . '</span>
					<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Previous', 'suri' ) . '</span>
					<span class="screen-reader-text">' . esc_html__( 'Previous post:', 'suri' ) . '</span>
					<span class="post-title">%title</span>',
			) );
		endif;
	}

	/**
	 * Conditionally include sidebar widgets display template.
	 *
	 * @since  0.0.8
	 */
	public static function sidebar() {
		if ( is_active_sidebar( 'sidebar-1' ) && 'only-content' !== get_theme_mod( 'suri_layout', suri_get_theme_defaults( 'suri_layout' ) ) ) :
			get_template_part( 'template-parts/site', 'sidebar' );
		endif;
	}

	/**
	 * Include comment title display template.
	 *
	 * @since  0.0.1
	 */
	public static function comment_title() {
		get_template_part( 'template-parts/comment', 'title' );
	}

	/**
	 * Include template to display pingback, trackback or comment.
	 *
	 * @since  0.0.8
	 *
	 * @param object $comment comment object.
	 */
	public static function comments( $comment ) {
		$comment_type = get_comment_type( $comment->comment_ID );
		if ( 'pingback' === $comment_type || 'trackback' === $comment_type ) :
			get_template_part( 'template-parts/comment', 'ping' );
		else :
			get_template_part( 'template-parts/comment' );
		endif;
	}

	/**
	 * Conditionally include comments navigation display template.
	 *
	 * @since  0.0.3
	 */
	public static function comment_navigation() {
		if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :// Are there comments to navigate through?
			get_template_part( 'template-parts/comment', 'navigation' );
		endif;
	}

	/**
	 * Conditionally include footer widgets display template.
	 *
	 * @since  0.0.3
	 */
	public static function footer_widgets() {
		if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) :
			get_template_part( 'template-parts/footer', 'widgets' );
		endif;
	}

	/**
	 * Include template to display footer widgets
	 *
	 * @since  0.0.6
	 */
	public static function footer_items() {
		get_template_part( 'template-parts/footer', 'items' );
	}
}

Suri_Display::initiate();
