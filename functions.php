<?php

// Site title
function dp_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	} // end if

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	} // end if

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 ) {
		$title = sprintf( __( 'Page %s', 'mayer' ), max( $paged, $page ) ) . " $sep $title";
	} // end if

	return $title;

} // end dp_wp_title
add_filter( 'wp_title', 'dp_wp_title', 10, 2 );

// Editor style match
add_editor_style('editor-style.css');

// Enable feeds
add_theme_support( 'automatic-feed-links' );

// Support WordPress 3.0+ custom menus
register_nav_menus(array(
	'top_menu' => __( 'Top Navigation' ),
));
function dp_nav_fallback() {
	echo '<div class="main-nav"><ul class="menu">';
	echo '<li class="menu-item"><a href="'.home_url().'"><span class="inner">Home</span></a></li>';
	echo '</ul></div>';
}

// Enable custom background
add_theme_support( 'custom-background' );

// Support WordPress post thumbnails
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 200, 200, true );
add_image_size( 'primary-post-thumbnail', 620, 9999 );
add_image_size( 'secondary-post-thumbnail', 300, 9999 );

if ( ! isset( $content_width ) ) $content_width = 620;

// Custom loop for primary + secondary thumbnails
$postcount = array();
function is_first_post($id) {
	global $postcount;
	# Add a new id if one has not been added already
	$postcount[$id] = true;
	# If we're on the first page of posts and the first post
	if ( is_home() && !is_paged() && count($postcount) == 1 )
	return true;
	return false;
}

// Truncate long post titles
function dp_text_truncate($text) {
	$chars_limit = 32;
	$chars_text = strlen($text);
	$text = $text." ";
	$text = substr($text,0,$chars_limit);
	$text = substr($text,0,strrpos($text,' '));
	if ($chars_text > $chars_limit)
	{ $text = $text."..."; }
	return $text;
}

// Support WordPress widgets
add_action( 'widgets_init', 'dp_register_sidebars' );
function dp_register_sidebars() {
	/* Register the main sidebar widget container */
	register_sidebar(
		array(
			'id' => 'sidebar-widget-container',
			'name' => __('Sidebar Widgets'),
			'description' => __('Main sidebar widget container located above the fold visible on all pages. Best for search or ad blocks.'),
			'before_widget' => '<div class="widget"><div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div></div>',
			'before_title' => '<h2 class="widgettitle">',
			'after_title' => '</h2>',
		)
	);
	/* Register the middle widget container */
	register_sidebar(
		array(
			'id' => 'middle-widget-container',
			'name' => __('Middle Widgets'),
			'description' => __('Full width widget container located underneath the main content and sidebar columns. Most users opt to display their categories widget here.'),
			'before_widget' => '<div class="widget"><div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div></div>',
			'before_title' => '<h2 class="widgettitle">',
			'after_title' => '</h2>',
		)
	);
	/* Register the bottom widget container */
	register_sidebar(
		array(
			'id' => 'bottom-widget-container',
			'name' => __('Bottom Widgets'),
			'description' => __('These widgets are located towards the bottom of your site immediately above the footer. Best for list type widgets like your blogroll, recent comments or RSS feeds..'),
			'before_widget' => '<div class="widget"><div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div></div>',
			'before_title' => '<h2 class="widgettitle">',
			'after_title' => '</h2>',
		)
	);
}

?>