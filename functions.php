<?php
function add_my_scripts() {

    //オリジナルJavaScriptを</body>前に読み込み
    wp_enqueue_script('prism',get_theme_file_uri( '/js/prism.js' ),
    array(),'',true);
    wp_enqueue_script('slick',get_theme_file_uri( '/js/slick.min.js' ),
    array(),'',true);
    wp_enqueue_script('myscript',get_theme_file_uri( '/js/script.js' ),
    array(),'',true);
}
add_action('wp_enqueue_scripts', 'add_my_scripts');


function my_theme_setup() {
  //アイキャッチ画像を有効化
  add_theme_support('post-thumbnails');

  //追記
  //heade内にフィードリンクを出力
  add_theme_support('automatic-feed-links');

}
add_action( 'after_setup_theme', 'my_theme_setup');

function my_theme_widgets_init() {
  register_sidebar( array(
    'name' => 'Main Sidebar',
    'id' => 'main-sidebar',
  ) );
}
add_action( 'widgets_init', 'my_theme_widgets_init' );