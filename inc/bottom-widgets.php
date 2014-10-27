<div id="bottom" class="widgets-zone">
    <?php if (is_active_sidebar( 'bottom-widget-container' )) : ?>
		<?php dynamic_sidebar( 'bottom-widget-container' ); ?>
	<?php else : ?>
		<?php the_widget( 'WP_Widget_Meta' ); ?>
		<?php the_widget( 'WP_Widget_Pages' ); ?>
		<?php the_widget( 'WP_Widget_Archives' ); ?>
	<?php endif; ?>
</div>