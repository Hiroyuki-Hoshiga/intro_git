<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header(); ?>
</head>
<body>
  <?php get_template_part('nav-header'); ?>


  <section class="page-contact">
    <div class="page-contact__mv page-mv">
      <div class="page-mv__inner">
        <div class="page-mv__copy">
          <h2 class="page-mv__main-title">お問い合わせ・資料請求</h2>
        </div>
      </div>
    </div>
    <div class="page-contact__breadcrumbs breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <div class="breadcrumbs__inner l-inner">
        <?php if(function_exists('bcn_display')){
          bcn_display();
        }
        ?>
      </div>
    </div>
    <div class="page-contact__inner l-inner">
      <div class="page-contact__contact-form contact-form">
        <div id="main-content">
          <?php if(have_posts()): ?>
            <?php while(have_posts()):the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
  </section>
    
  <?php get_template_part('nav-footer'); ?>
  <?php get_footer(); ?>
</body>
</html>

