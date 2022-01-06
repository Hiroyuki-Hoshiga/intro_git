<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header(); ?>
</head>
<body>
  <?php get_template_part('nav-header'); ?>


  <section class="archive-news">
    <div class="archive-news__mv page-mv">
      <div class="page-mv__inner">
        <div class="page-mv__copy">
          <h2 class="page-mv__main-title">お知らせ</h2>
        </div>
      </div>
    </div>
    <div class="archive-news__breadcrumbs breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <div class="breadcrumbs__inner l-inner">
      <?php if(function_exists('bcn_display')){
      bcn_display();
      }
      ?>
      </div>
    </div>
    <div class="archive-news__inner l-inner">
      <div class="archive-news__header">お知らせ一覧</div>
      <div class="archive-news__table-news table-news">
        <div class="table-news__list">
          <?php if (have_posts()): while(have_posts()): the_post(); ?>
            <a class="table-news__link" href="<?php the_permalink(); ?>">
              <div class="table-news__body">
                <time><?php the_time( 'Y-m-d' ); ?></time>
                <p class="table-news__title"><?php the_title(); ?></p>
              </div>
            </a>
          <?php endwhile; endif; ?>
        </div>
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