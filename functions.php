<?php
//カスタムメニュー
register_nav_menus (
  array(
    'place_glocal' =>'グローバル',
    'place_footer' =>'フッターナビ'
)
);
add_theme_support('post-thumbnails');
?>

<?php
/* 投稿アーカイブページの作成 */
function post_has_archive( $args, $post_type ) {

	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'blogs'; //任意のスラッグ名
	}
	return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );
?>


<?php
//WP Socical Bookmark 位置調整 
  function wpSns() {
    if (function_exists("wp_social_bookmarking_light_output_e")) {
      wp_social_bookmarking_light_output_e();
    }
  }
  add_shortcode('socialBtns', 'wpSns');
?>

<?php
// ページネーションのHTMLカスタマイズ
function custom_pagination_html( $template ) {
    $template = '
    <nav class="pagination" role="navigation">
        <h2 class="screen-reader-text">%2$s</h2>
        %3$s
    </nav>';
    return $template;
}
add_filter('navigation_markup_template','custom_pagination_html');
?>

<?php
// ページ表示件数の設定
function custom_posts_per_page($query) {
    if(is_admin() || ! $query->is_main_query()){
        return;
    }
    // お知らせ
    if($query->is_archive('news')) {
        $query->set('posts_per_page', '10');
    }
    // ブログ
    if($query->is_home('blog')) {
        $query->set('posts_per_page', '10');
    }
}
add_action('pre_get_posts', 'custom_posts_per_page');
?>

<?php
//アイキャッチ画像を利用できるようにする
add_theme_support( 'post-thumbnails');

//ブログ個別ページのメイン画像用のサイズ設定
add_image_size( 'blog',590,370,true);
?>
