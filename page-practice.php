<?php
/* 
Template Name: プラクティス
*/
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header(); ?>
</head>
<body>
<?php get_template_part('nav-header'); ?>


  <section class="page-practice">
    <div class="page-practice__mv page-mv">
      <div class="page-mv__inner">
        <div class="page-mv__copy">
          <h2 class="page-mv__main-title">プラクティス</h2>
        </div>
      </div>
    </div>
    <div class="page-practice__breadcrumbs breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <div class="breadcrumbs__inner l-inner">
      <?php if(function_exists('bcn_display')){
      bcn_display();
      }
      ?>
      </div>
    </div>

    <div class="page-practice__inner l-inner">
      <div class="page-practice__section-header section-header01">
        <span>CONTENT</span>
        <h2>事業内容</h2>
      </div>
      <div class="page-practice__section-header section-header02">
       <h2>事業内容</h2>
      </div>
      <div class="page-practice__section-header section-header04">
        <span>Content</span>
        <h2>事業内容</h2>
      </div>
      <div class="page-practice__section-header section-header05">
       <h2>セクション見出し</h2>
      </div>
      <div class="page-practice__section-header section-header06">タイトル</div>
      <div class="page-practice__section-header section-header07">タイトル</div>
      <div class="page-practice__section-header section-header03">タイトル</div>
      <div class="page-practice__section-header section-header08">タイトル</div>
      <div class="page-practice__section-header section-header09">タイトル</div>
      <div class="page-practice__section-header section-header10">タイトル</div>
      <div class="page-practice__section-header section-header11">タイトル</div>
    </div>
  </section>

 
<?php get_template_part('parts-contact'); ?>
<?php get_template_part('nav-footer'); ?>
<?php get_footer(); ?>
</body>
</html>