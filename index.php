
<?php get_header(); ?>

	<h2 class="categorys__title"><?php single_cat_title(); ?></h2>


  <section class="posts">

<?php if (have_posts()): //もし1件以上記事があったら ?>
<?php while (have_posts()): //記事がある間は繰り返す
the_post(); //次の記事のデータをセットする?>
<!--1記事め開始-->
<article id="post-<?php the_ID(); ?>" class="postBox">
   <a href="<?php the_permalink(); ?>">
      <div class="postBox__icon"><?php echo get_avatar(get_the_author_id(), 63); ?></div>

      <div class="postBox__texts">
        <div class="postBox__flex">
           <p class="postBox__name"><?php the_author(); ?></p>
             <p class="postBox__time">
             <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
            </p>
           </div>
     <h2 class="postBox__title"><?php echo wp_trim_words( get_the_title(), 20, '…' ); ?>
</h2>
     <div class="post__text">
      <?php echo wp_trim_words( get_the_content(), 10, '[続く]' ); ?>
    </div>
    </div>
  </a>
</article>
<!--1記事め終了-->
<?php endwhile; //ループ終了 ?>
<?php else: //もし、表示すべき記事がなかったら?>
<p>まだ記事はありません。</p>
<?php endif; //条件分岐終了 ?>
</section>



<script>const items = document.querySelectorAll('.item');
const moreBtn = document.getElementById('more-btn');

// 最初は3つ目の要素以降を非表示にする
for (let i = 3; i < items.length; i++) {
  items[i].classList.add('hidden');
}

// 「もっと見る」ボタンをクリックした時の処理
moreBtn.addEventListener('click', () => {
  // 非表示になっている要素をすべて表示する
  for (let i = 0; i < items.length; i++) {
    items[i].classList.remove('hidden');
  }

  // ボタンを非表示にする
  moreBtn.classList.add('hidden');
});
</script>

<?php get_footer(); ?>
