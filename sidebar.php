<div class="sidebar-column grid-4">

	<?php if ( is_single() ) { ?>

		<ul class="paginate-posts group">
			<li class="older"><?php previous_post_link('%link', '<span>Older <em>&larr;</em></span>') ?></li>
			<li class="newer"><?php next_post_link('%link', '<span>Newer <em>&rarr;</em></span>') ?></li>
		</ul>

	<?php } ?>

	<?php if (is_active_sidebar( 'sidebar-widget-container' )) : ?>

		<?php dynamic_sidebar( 'sidebar-widget-container' ); ?>

	<?php else : ?>

		<div class="widget">

			<?php the_widget( 'WP_Widget_Search' ); ?>
			<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

		</div><!-- .widget -->

	<?php endif; ?>

</div><!-- .sidebar-column -->