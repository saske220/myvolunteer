<div id="comments" class="comments">
<?php if( have_comments() ):?>

<ol class="commets-list">
<?php wp_list_comments( 'avatar_size=80' ); ?>
</ol>
<?php endif; ?>
<?php $args = array(
'title_reply' => '',
'comment_notes_before' => '<p>コメント記入欄の上に表示するメッセージ</p>',

'label_submit' => '参加する'
);
comment_form( $args ); ?>
</div>