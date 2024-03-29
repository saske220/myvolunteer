
<!DOCTYPE html>
<html id="html" class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <?php if( is_home() || is_front_page() ): ?>
      <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php elseif( is_category() ): ?>
      <meta name="description" content="<?php echo category_description(); ?>"> <?php elseif( is_tag() ): ?>
      <meta name="description" content="<?php echo tag_description(); ?>">
    <?php elseif( is_singular() ): ?>
      <meta name="description" content="<?php echo get_the_excerpt(); ?>">
    <?php endif; ?>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php if(is_front_page() || is_home()) {
      echo get_bloginfo('name'); } else { echo wp_title(''); } ?></title>

<link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css">
<link href="https://cdn.jsdelivr.net/npm/destyle.css@4.0.0/destyle.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri()); ?>/css/style.css">
<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri()); ?>/top/top.css">

</head>
 <?php wp_head(); ?>
 <header class="header">
    <section class="about">


<div class="about__icon"><?php bp_loggedin_user_avatar("type=thumb&width=35&height=35" ); ?></div>



</section>

 </header>

  <div class="menu">
<section class="categorys">

<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
	<input type="submit" id="searchsubmit" value="検索" />
	<?php do_action( 'bp_blog_search_form' ) ?>
</form>

<!-- <h2 class="categorys__titles">カテゴリー一覧</h2> -->
<p class="moreBtn">カテゴリー一覧</p>
          <div class="moreMenu">
            <h2>カテゴリー一覧</h2>
            <p>#ごみ拾い</p>
            <p>#介護</p>
            <p>#子ども食堂</p>
            <p>#地球温暖化</p>
            <!-- <p>#雪かき</p>
            <p>#マラソン</p>
            <p>#炊き出し</p>
            <p>#楽しい</p> -->
          </div>
<ul>
<?php
  $args = array(
    'title_li' => '',
    'depth'=> 1,
    'show_count' => 1,
);
wp_list_categories($args); ?>
</ul>
</section>
    </div>