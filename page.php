<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header(); ?>
</head>
<body>
<?php get_template_part('nav-header'); ?>

<div class="block80">
  
  
  <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
  <div class="breadcrumbs__inner l-inner">
    <?php if(function_exists('bcn_display')){
      bcn_display();
    }
    ?>
      </div>
    </div>
    <div class="block80">
      
      <?php
if( have_posts() ):
  while( have_posts() ):the_post();
  the_content();
endwhile;
endif;
?>
</div>
<div class="block80">

<?php get_template_part('parts-contact'); ?>
<?php get_template_part('nav-footer'); ?>
<?php get_footer(); ?>
</body>
</html>