		<?php include(TEMPLATEPATH . '/inc/middle-widgets.php'); ?>
		<?php include(TEMPLATEPATH . '/inc/bottom-widgets.php'); ?>
		<footer id="footer">
			<div class="footer-left">
				<a href="<?php echo home_url(); ?>/" title="Home"><?php bloginfo('name'); ?></a> - <a href="<?php bloginfo('rss2_url'); ?>">Content (RSS)</a>
			</div>
			<div class="footer-right">
				<a href="http://5thirtyone.com/the-unstandard" title="Download the Unstandard WordPress Theme">Unstandard</a>
			</div>
		</footer>
	<?php wp_footer(); ?>
</div>
<?php include(TEMPLATEPATH . '/inc/slideout-menu.php'); ?>
</body>
</html>