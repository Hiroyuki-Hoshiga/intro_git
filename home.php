<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header(); ?>
  </head>
  <body>
  <?php get_template_part('nav-header'); ?>
  
  <section class="page-blog">
    <div class="page-blog__mv page-mv">
      <div class="page-mv__inner">
        <div class="page-mv__copy">
          <h2 class="page-mv__main-title">ブログ</h2>
        </div>
      </div>
    </div>
    <div class="page-price__breadcrumbs breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <div class="breadcrumbs__inner l-inner">
      <?php if(function_exists('bcn_display')){
      bcn_display();
      }
      ?>
      </div>
    </div>
    <div class="page-blog__inner l-inner">
      <div class="page-blog__header">新着一覧</div>
      <div class="cards-blog">
        <?php if (have_posts()): while(have_posts()): the_post(); ?>
          <a class="cards-blog__item card-blog" href="<?php the_permalink(); ?>">
            <div class="card-blog__image">
              <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(); ?>
              <?php else: ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/noimg.png" alt="">
              <?php endif; ?>
              <div class="card-blog__cate">
                <?php
                  $cat = get_the_category();
                  $catname = $cat[0]->cat_name;//カテゴリー名
                  $catslug = $cat[0]->slug;// スラッグ名
                ?>
                <span class="<?php echo $catslug; ?>"><?php echo $catname; ?></span>
              </div>
            </div>
            <div class="card-blog__body">
              <div class="card-blog__info">
                <div class="card-blog__date"><?php the_time( 'Y-m-d' ); ?></div>
              </div>
              <div class="card-blog__title">
                <?php //タイトルの文字数を30文字で制限
                if ( mb_strlen( $post->post_title, 'UTF-8' ) > 30 ) {
                  $title = mb_substr( $post->post_title, 0, 30, 'UTF-8' );
                  echo $title . '…';
                } else {
                  echo $post->post_title;
                }
                ?>
              </div>
              <div class="card-blog__copy">
                <?php //本文の文字数を100文字で制限
                if ( mb_strlen( $post->post_content, 'UTF-8' ) > 100 ) {
                  $content = str_replace( '\n', '', mb_substr( strip_tags( $post->post_content ), 0, 100, 'UTF-8' ) );
                  echo $content . '…';
                } else {
                  echo str_replace( '\n', '', strip_tags( $post->post_content ) );
                }
                ?> 
              </div>
            </div>
          </a>
        <?php endwhile; endif; ?>
      </div>
      <div class="archive-news__pagination"><!-- pagenation -->
        <?php the_posts_pagination (
          array (
              'mid_size'    => 2, // 現在ページの左右に表示するページ番号の数
              'prev_next'   => false, // 「前へ」「次へ」のリンクを表示する場合はtrue
              'prev_text'   => __( '前へ'), // 「前へ」リンクのテキスト
              'next_text'   => __( '次へ'), // 「次へ」リンクのテキスト
              'type'        => 'list', // 戻り値の指定 (plain/list)
          )
        ); ?>
      </div><!-- pagenation end-->
    </div>
  </section>
    
    
  <?php get_template_part('parts-contact'); ?>
  <?php get_template_part('nav-footer'); ?>
  <?php get_footer(); ?>
  </body>
</html>