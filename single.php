
<?php get_header(); ?>



			<h2 class="categorys__title"><?php single_cat_title(); ?></h2>

      <section class="single">
<?php if (have_posts() ): ?>

<?php while (have_posts()):the_post(); ?>

<article <?php post_class("entry"); ?>> <!-- 特別なclassを付随させる -->
  <h2 class="entry-title"><a href="<?php the_permalink(); ?>">
    <?php the_title(); ?>
    </a></h2>
    <?php the_category( ',' ); ?>
  <!-- 記事のタイトル -->

  <div class="entry-content">
    <?php the_content( ); ?><!-- 記事の内容 -->
  </div>
  <div class="entry-footer">
    <?php the_tags( '<span class="tag-links">', ', ', '</span>' ); ?>
    <!-- 記事のタグコンマ「,」で区切る -->
  </div>

</article>
<?php endwhile; ?>


<?php endif; ?>



<div class="comments">
  <?php comments_template(); ?>
</div>
</section>


<?php get_footer(); ?>