<?php
/**
 * @package TheUnstandard
 * @since TheUnstandard 2.0
 */
/*
Template Name: Full Width
*/
get_header(); ?>

<div class="north">
		
	<div class="main-column grid-12">
		
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

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => '<p class="paginate-post"><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>

		</div>
		
		<div class="grid-8 alpha">
		<?php comments_template(); ?>
		</div>
			
		<?php endwhile; else : ?>
			
		<div class="single-entry group">
			
			<h2>Nothing Found</h2>
			
			<p>Oops! It looks like you may have stumbled upon a page that may have existed at one point - but is missing now. Please check the link and try again.</p>
			
		</div>
			
		<?php endif; ?>
		
	</div>
		
	<div class="clear"></div>
	
</div>

<?php get_footer(); ?>