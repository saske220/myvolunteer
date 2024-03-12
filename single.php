<?php if (have_posts() ): ?>
<!-- もし、記事が1件以上あったら-->
<?php while (have_posts()):the_post(); ?>
<!-- 記事の表示条件で繰り返す（※個別投稿ページの場合は、1回）-->
<article <?php post_class("entry"); ?>> <!-- 特別なclassを付随させる -->
  <h2 class="entry-title"><a href="<?php the_permalink(); ?>">
    <?php the_title(); ?>
    </a></h2>
  <!-- 記事のタイトル -->
  <div class="entry-meta">
    <ul>
      <li><?php the_time('F jS, Y ');?> <!-- 記事の投稿日 --></li>
      <span class="meta-sep">&bull;</span>
      <li><?php the_category( ',' ); ?> <!-- 記事のカテゴリー --></li>
      <span class="meta-sep">&bull;</span>
      <li><?php the_author(); ?> <!-- 記事の投稿者 --></li>
    </ul>
  </div>
  <div class="entry-content">
    <?php the_content( ); ?><!-- 記事の内容 -->
  </div>
  <div class="entry-footer"> <span class="comments-link"><a href="#">1件のコメント</a></span>
    <?php the_tags( '<span class="tag-links">', ', ', '</span>' ); ?>
    <!-- 記事のタグコンマ「,」で区切る -->
  </div>
</article>
<?php endwhile; ?>
<!-- 繰り返し終了 -->

<?php endif; ?>
<!-- if文終了。-->

<!-- 前後のナビゲーション開始-->
<?php the_post_navigation(); ?>
<!-- 前後のナビゲーション終了 -->

<section class="comments">
  <?php comments_template(); ?>
</section>