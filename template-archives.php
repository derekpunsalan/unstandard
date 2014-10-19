<?php
/**
 * @package TheUnstandard
 * @since TheUnstandard 2.0
 */
/*
Template Name: Archives Page
*/
get_header(); ?>

<div class="north">
		
	<div class="main-column grid-8">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div id="post-<?php the_ID(); ?>" class="single-entry group">

			<h2><?php the_title(); ?></h2>
			
			<div class="post-meta group">
				
				<div class="post-date">
					
					<span class="sub-title">Posted</span>
					
					<span class="title"><?php the_time('M jS, Y') ?> <?php edit_post_link('(Edit)', '', ''); ?></span>
					
				</div>
				
				<div class="post-author">
					
					<span class="sub-title">Author</span>
					
					<span class="title"><?php the_author_posts_link(); ?></span>
					
				</div>
				
				<div class="post-comments">
					
					<span class="sub-title">Discuss</span>
					
					<span class="title"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span>
					
				</div>
				
			</div><!-- .post-meta -->

			<div <?php post_class('post') ?>>

				<h4>Last 30 Posts</h4>
				
				<ul>
					<?php $saved = $wp_query; query_posts('showposts=30'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php $wp_query->is_home = false; ?>
						<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a> - <?php the_time(get_option( 'date_format' )); ?></li>
					<?php endwhile; endif; $wp_query = $saved; ?>
                </ul>
				
				<h4>Categories</h4>
				
				<ul>
					<?php wp_list_categories('title_li=&hierarchical=0&show_count=1') ?>
				</ul>

				<h4>Monthly Archives</h4>
				
				<ul>
					<?php wp_get_archives('type=monthly&show_post_count=1') ?>
                </ul>

			</div>

		</div>
		
		<?php comments_template(); ?>
			
		<?php endwhile; else : ?>
			
		<div class="single-entry group">
			
			<h2>Nothing Found</h2>
			
			<p>Oops! It looks like you may have stumbled upon a page that may have existed at one point - but is missing now. Please check the link and try again.</p>
			
		</div>
			
		<?php endif; ?>
		
	</div>
	
	<?php get_sidebar(); ?>
		
	<div class="clear"></div>
	
</div>

<?php get_footer(); ?>