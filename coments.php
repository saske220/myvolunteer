<div id="comments" class="comments">
<?php if( have_comments() ):?>
<h3 class="widget_title">コメント</h3>
<ol class="commets-list">
<?php wp_list_comments( 'avatar_size=80' ); ?>
</ol>
<?php endif; ?>
<?php $args = array(
'title_reply' => 'コメントする',
'comment_notes_before' => '<p>コメント記入欄の上に表示するメッセージ</p>',
'comment_notes_after' => '<p>コメント記入欄の下に表示するメッセージ</p>',
'label_submit' => 'SUBMIT'
);
comment_form( $args ); ?>
</div>