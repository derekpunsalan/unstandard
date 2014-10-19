<div id="comments">
<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	if ( post_password_required() ) { ?>
		<div class="status-message comments-closed">
			<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
		</div>
	<?php
		return;
	}
?>

<h4 class="comments-title">Discuss - <?php comments_number('No Comments', 'One Comment', '% Comments'); ?></h4>

<?php if ( have_comments() ) : ?>

<div class="comments-loop">

	<ol class="comments-list">

		<?php wp_list_comments('avatar_size=64'); ?>

	</ol>

	<div id="paginate-comments" class="group">

		<div class="left"><?php previous_comments_link('Older Comments') ?></div>

		<div class="right"><?php next_comments_link('Newer Comments') ?></div>

	</div>

</div>

<?php else :?>
<?php if ( comments_open() ) : ?>

<div class="no-comments">No comments yet. Why not add one below?</div>

<?php else :?>

<div class="status-message comments-closed">

	<p>Comments are currently closed.</p>

</div>

<?php endif; ?>
<?php endif; ?>

<?php if ( comments_open() ) : ?>

	<?php comment_form(
		array(
			'title_reply' => 'Add a Comment',
			'comment_notes_before' => '<div class="comment-notes">Your email address will not be published. Note marked required (*) fields.</div>',
			'comment_notes_after' => ''
		)
	); ?>

<?php endif; ?>
</div><!-- #comments -->