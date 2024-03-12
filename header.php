
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
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
    <link rel="stylesheet" href="./css/style.css" />

    <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri()); ?>./css/style.css">
</head>

 <?php wp_head(); ?>