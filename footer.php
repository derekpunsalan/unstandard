
		<div id="middle">

			<div class="grid-12">

			    <?php if (is_active_sidebar( 'middle-widget-container' )) : ?>

					<?php dynamic_sidebar( 'middle-widget-container' ); ?>

				<?php else : ?>

					<?php the_widget('WP_Widget_Categories', 'dropdown=0&count=1'); ?>

				<?php endif; ?>

			</div>

			<div class="clear"></div>

		</div><!-- #middle -->

		<div id="bottom">

			<div class="grid-12">

			    <?php if (is_active_sidebar( 'bottom-widget-container' )) : ?>

					<?php dynamic_sidebar( 'bottom-widget-container' ); ?>

				<?php else : ?>

					<?php the_widget( 'WP_Widget_Meta' ); ?>
					<?php the_widget( 'WP_Widget_Pages' ); ?>
					<?php the_widget( 'WP_Widget_Archives' ); ?>

				<?php endif; ?>

			</div>

			<div class="clear"></div>

		</div><!-- #bottom -->

		<div id="footer">

			<div class="grid-12">

				<div class="footer-left grid-6 alpha">

					<a href="<?php echo home_url(); ?>/" title="Home"><?php bloginfo('name'); ?></a> - <a href="<?php bloginfo('rss2_url'); ?>">Content (RSS)</a>

				</div>

				<div class="footer-right align-right grid-6 omega">

					<a href="http://5thirtyone.com/the-unstandard" title="Download the Unstandard WordPress Theme">Unstandard</a>

				</div>

			</div>

			<div class="clear"></div>

		</div><!-- #footer -->

	<?php wp_footer(); ?>

</div><!-- #wrapper -->

<div class="cd-panel from-right">
    <header class="cd-panel-header">
        <a href="#0" class="cd-panel-close">Close</a>
    </header>

    <div class="cd-panel-container">
        <div class="cd-panel-content">
            <?php wp_nav_menu(array(
            	'menu' => 'top_menu',
            	'container_class' => 'main-nav',
            	'fallback_cb' => 'dp_nav_fallback',
            	'depth' => 2
            )); ?>
        </div> <!-- cd-panel-content -->
    </div> <!-- cd-panel-container -->
</div> <!-- cd-panel -->

</body>

</html>