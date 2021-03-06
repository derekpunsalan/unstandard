<?php get_header(); ?>

<div class="north">

	<div class="main-column grid-8<?php if ( is_search() ) {?> search-page<?php } elseif ( ! is_archive() && ! is_paged() ) { ?> front-page<?php } else { ?> back-page<?php } ?>">

		<?php if (is_search() ) { ?>

		<div class="search-results-info secondary-post grid-4 alpha omega thumb-post">

			<h3 class="results-title">Results for '<?php the_search_query(); ?>'</h3>

		</div>

		<?php } ?>

		<?php if (is_archive() ) { ?>

		<div class="search-results-info secondary-post grid-4 alpha omega thumb-post">

			<h3 class="results-title">Posts filed as '<?php single_cat_title() ?>'</h3>

		</div>

		<?php } ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div id="post-<?php the_ID(); ?>" class="<?php echo ( is_first_post($post->ID) ) ? 'primary-post grid-8 alpha omega thumb-post' : 'secondary-post grid-4 alpha omega thumb-post'; ?>">

			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">

				<?php if ( is_first_post($post->ID) ) { ?>
					<?php the_post_thumbnail('primary-post-thumbnail'); ?>
				<?php } else { ?>
					<?php the_post_thumbnail('secondary-post-thumbnail'); ?>
				<?php } ?>

				<div class="thumbnail-title">

					<h2>
						<?php if ( is_first_post($post->ID) ) { ?>
							<?php the_title(); ?>
						<?php } else { ?>
							<?php echo dp_text_truncate(get_the_title()); ?>
						<?php } ?>
					</h2>

					<span class="comment-count"><?php comments_number('0','1','%'); ?></span>

				</div>

			</a>

		</div>

		<?php endwhile; ?>

		<div class="loop-paging grid-8 alpha omega">

			<p class="show-previous-page"><?php previous_posts_link('&laquo; previous'); ?></p>
			<p class="show-next-page"><?php next_posts_link('next &raquo;'); ?></p>

		</div>

		<?php else : endif; ?>

	</div><!-- .main-column -->

	<?php get_sidebar(); ?>

	<div class="clear"></div>

</div>


<?php get_footer(); ?>