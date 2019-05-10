<section class="comments">
<?php
$comment_form_args = array(
	'title_reply'         => 'コメント投稿フォーム',
	'comment_notes_after' => '',
);
comment_form( $comment_form_args );
if ( have_comments() ) :
	?>
	<p><?php comments_number(); ?></p>
	<ol class="commentliset">
		<?php wp_list_comments(); ?>
	</ol>
	<?php
	$paginate_comments_link_args = array(
		'prev_text' => '←前のコメントページ',
		'next_text' => '次のコメントページ→',
	);
	paginate_comments_links( $paginate_comments_link_args );
endif;
?>
</section><!-- /.comments -->
