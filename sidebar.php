<?php if (is_active_sidebar( 'sidebar-widget-container' )) : ?>
<div class="sidebar-column">

	<?php if ( is_single() ) { ?>
	<ul class="paginate-posts group">
		<li class="older"><?php previous_post_link('%link', '<span>Older <em>&larr;</em></span>') ?></li>
		<li class="newer"><?php next_post_link('%link', '<span>Newer <em>&rarr;</em></span>') ?></li>
	</ul>
	<?php } ?>

	<?php dynamic_sidebar( 'sidebar-widget-container' ); ?>

</div>
<?php endif; ?>