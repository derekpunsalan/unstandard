<div id="middle" class="widgets-zone">
    <?php if (is_active_sidebar( 'middle-widget-container' )) : ?>
		<?php dynamic_sidebar( 'middle-widget-container' ); ?>
	<?php else : ?>
		<?php the_widget('WP_Widget_Categories', 'dropdown=0&count=1'); ?>
	<?php endif; ?>
</div>