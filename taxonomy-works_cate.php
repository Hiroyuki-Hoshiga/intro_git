<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header(); ?>
</head>
<body>
  <?php get_template_part('nav-header'); ?>


  <section class="works-page">
    <div class="works-page__mv page-mv">
      <div class="page-mv__inner">
        <div class="page-mv__copy">
          <h2 class="page-mv__main-title"> 制作実績</h2>
        </div>
      </div>
    </div>
    <div class="works-page__inner l-inner">
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display'))
          {
            bcn_display();
          }?>
      </div>

      <div class="works-page__category-tab">
        <div class="category-list">
          <ul>
            <a class='category-tab' href="<?php bloginfo('url'); ?>/works">ALL</a>
            <?php wp_list_categories( 'taxonomy=works_cate&title_li='); ?>
          <ul>

        </div>
      </div>
      <div class="blog-cards-works">
        <?php if (have_posts()): while(have_posts()): the_post(); ?>
        <a class="blog-cards-works__item card-works" href="<?php the_permalink(); ?>">
          <div class="card-works__image ">
            <?php the_post_thumbnail('thumbside'); ?>
            <div class="card-works__cate">
            <?php $terms = wp_get_object_terms($post->ID,'works_cate'); foreach($terms as $term){echo $term->name . '';} ?>
          </div>
          </div>
          <div class="card-works__body">
            <h3 class="card-works__title"><?php the_title(); ?></h3>
          </div>
        </a>
        <?php endwhile; endif; ?>
      </div>

      <div class="blog-page__pagenavi">
        <?php wp_pagenavi(); ?>
      </div>
    </div>
  </section>

  
  <?php get_template_part('parts-contact'); ?>
<?php get_template_part('nav-footer'); ?>
<?php get_footer(); ?>
</body>
</html>