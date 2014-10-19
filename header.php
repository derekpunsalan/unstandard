<?php
/**
 * @package Unstandard
 * @since Unstandard 3.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="ie7"><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="ie8"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />

<!-- Pingback -->
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<link rel="alternate" type="application/rss+xml" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> Feed" href="<?php bloginfo('rss2_url'); ?>" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />

<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/960.css" />

<link href="http://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet" type="text/css"/>

<!--[if (gte IE 7)&(lte IE 8)]>
<script src="<?php echo get_template_directory_uri(); ?>/js/selectivizr.js" type="text/javascript"></script>
<![endif]-->

<!-- Grab Google CDN's jQuery; if that fails, fall back to WP local copy -->
<?php wp_enqueue_script( 'jquery' ); ?>

<script type="application/x-javascript">!window.jQuery && document.write('<script src="/wp-includes/js/jquery/jquery.js"><\/script>')</script>

<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.masonry.min.js" type="text/javascript"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/functions.js" type="text/javascript"></script>

</head>

<body <?php body_class(); ?>>

<div class="masthead">

	<div class="container-12">

		<div class="logo grid-5">

		    <a href="<?php echo home_url(); ?>/" title="Home">

				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" width="248" height="32" />

			</a>

		</div>

		<?php wp_nav_menu(array(
			'menu' => 'top_menu',
			'container_class' => 'main-nav grid-7',
			'fallback_cb' => 'dp_nav_fallback',
			'depth' => 3
		)); ?>

		<div class="clear"></div>

	</div>

</div>

<div id="main">

	<div class="container-12">