<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header(); ?>
</head>
<body>
  <?php get_template_part('nav-header'); ?>


  <section class="page-contact">
    <div class="page-contact__breadcrumbs breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <div class="breadcrumbs__inner l-inner">
        <?php if(function_exists('bcn_display')){
          bcn_display();
        }
        ?>
      </div>
    </div>
    <section class="thanks">
    <div class="thanks__inner l-inner">
      <p class="thanks__text">
        お問い合わせいただきありがとうございます<br>
        内容を確認した後、担当者よりご連絡いたします
      </p>
      <a href="/" class="thanks__link">ホームへ戻る</a>
    </div>
  </section>
    
  <?php get_template_part('nav-footer'); ?>
  <?php get_footer(); ?>
</body>
</html>

