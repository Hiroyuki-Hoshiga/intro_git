<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header(); ?>
</head>
<body>
  <?php get_template_part('nav-header'); ?>

  <div class="block80"></div>

  <div class="page-blog__breadcrumbs breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <div class="breadcrumbs__inner l-inner">
    <?php if(function_exists('bcn_display')){
    bcn_display();
    }
    ?>
    </div>
  </div>
  <div class="single-news">
    <div class="single-news__inner l-inner">
      <main class="post-news">
        <header class="post-news__title">
          <h1 class="post-news__main"><?php the_title(); ?></h1>
        </header>
        <div class="post-news__info">
          <p class="post-news__time"><time datetime="2020/06/13"><?php the_time( "Y-m-d" ); ?></time></p>
        </div>
        <article class="entry-news">
          <div class="entry-news__inner">
            <div class="entry-news__body">
              <?php the_content(); ?>
            </div>
          </div>
        </article>            
      </main>
    </div>
  </div>

  
<?php get_template_part('parts-contact'); ?>
<?php get_template_part('nav-footer'); ?>
<?php get_footer(); ?>
</body>
</html>