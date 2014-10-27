<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> Feed" href="<?php bloginfo('rss2_url'); ?>" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />

<link href="http://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet" type="text/css"/>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<?php wp_enqueue_script( 'jquery' ); ?>
<script type="application/x-javascript">!window.jQuery && document.write('<script src="/wp-includes/js/jquery/jquery.js"><\/script>')</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.masonry.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/functions.js" type="text/javascript"></script>

<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="masthead">
		<div class="masthead-inner">
			<div class="main-logo">
				<h1>
					<a href="<?php echo home_url(); ?>/" title="Home"><?php echo get_bloginfo( 'name' ); ?></a>
				</h1>
			</div>
			<div class="nav-toggle">
				<a class="cd-btn" href="#"><i class="fa fa-reorder"></i></a>
			</div>
		</div>
	</header>

	<div id="wrapper">