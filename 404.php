<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header(); ?>
</head>
<body>
  <?php get_template_part('nav-header'); ?>


  <section class="nf404">
    <div class="nf404__inner l-inner">
      <p class="nf404__heading">404 Not Found</p>
      <p class="nf404__text">
        お探しのページは<br>
        見つかりませんでした。
      </p>
      <div class="nf404__btn">
        <a href="/" class="btn btn-effect btn--contact">TOPへ</a>
      </div>
    </div>
  </section>


<?php get_template_part('nav-footer'); ?>
<?php get_footer(); ?>
</body>
</html>