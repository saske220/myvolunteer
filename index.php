
<?php get_header(); ?>

<?php get_sidebar(); ?>

<ul>
<?php
  $args = array(
    'title_li' => '',
    'depth'=> 1,
    'show_count' => 1,
);
wp_list_categories($args); ?>
</ul>

<ul>
  <?php
    wp_get_archives( array(
      'type' => 'monthly',
      'limit' => '',
      'show_post_count' => true,
    )); ?>
</ul>


<?php if (have_posts()): //もし1件以上記事があったら ?>
<?php while (have_posts()): //記事がある間は繰り返す
the_post(); //次の記事のデータをセットする?>
<!--1記事め開始-->
<article id="post-<?php the_ID(); ?>" class="postBox">
   <a href="<?php the_permalink(); ?>">
       <img class="postBox__image" src="images/map_thumbnail.png" alt="map?サムネイル">
     <p class="postBox__text">
        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
        <span class="update">最終更新日：<time datetime="<?php the_modified_date('Y-m-d'); ?>"><?php the_modified_date('Y年m月d日'); ?></time></span>
     </p>
     <h2 class="postBox__title"><?php echo wp_trim_words( get_the_title(), 20, '…' ); ?>
</h2>
     <div class="post__text">
      <?php echo wp_trim_words( get_the_content(), 10, '[続く]' ); ?>
    </div>
  </a>
</article>
<!--1記事め終了-->
<?php endwhile; //ループ終了 ?>
<?php else: //もし、表示すべき記事がなかったら?>
<p>まだ記事はありません。</p>
<?php endif; //条件分岐終了 ?>

<?php get_footer(); ?>
