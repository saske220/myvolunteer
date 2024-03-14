<?php
function add_my_scripts() {

    //オリジナルJavaScriptを</body>前に読み込み
    wp_enqueue_script('prism',get_theme_file_uri( '/js/prism.js' ),
    array(),'',true);
    wp_enqueue_script('slick',get_theme_file_uri( '/js/slick.min.js' ),
    array(),'',true);
    wp_enqueue_script('myscript',get_theme_file_uri( '/js/script.js' ),
    array(),'',true);


      //アイキャッチ画像を有効化
  add_theme_support('post-thumbnails');

  //追記
  //heade内にフィードリンクを出力
  add_theme_support('automatic-feed-links');

    //自動でtitleタグ挿入
  add_theme_support('title-tag');


    // 固定ページで「抜粋」を有効化
  add_post_type_support('page', 'excerpt');

  // カテゴリーとタグのmeta descriptionからpタグを除去
  remove_filter('term_description','wpautop');

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


add_action( 'wp_enqueue_scripts', 'my_bp_dequeue_scripts', 11 );
function my_bp_dequeue_scripts() {
  wp_dequeue_style( 'bp-nouveau' );
}

if (current_user_can('contributor') && !current_user_can('upload_files')) {
add_action('admin_init', 'allow_contributor_uploads');
}
function allow_contributor_uploads() {
$contributor = get_role('contributor');
$contributor->add_cap('upload_files');
}

add_action('wp_print_styles', 'deregister_bbpress_styles', 15);
function deregister_bbpress_styles()
{
	wp_deregister_style('bbp-default');
}

add_filter( 'bbp_get_forum_post_type_labels','my_bbp_get_forum_post_type_labels');
function my_bbp_get_forum_post_type_labels($arg){
	$arg['name']='任意の名前';
	return $arg;
}