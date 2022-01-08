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

<div class="header__inner">
      <h1 class="header__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/CodeUps.png" alt="logo">
      </h1>

      <div class="drawer u-mobile">
        <input type="checkbox" id="drawer-check" class="drawer-hidden" >
        <label for="drawer-check" class="drawer-open"><span></span></label>
        <nav class="drawer-content">
          <div class="drawer-inner">
            <ul class="drawer-list">
              <li class="drawer-item">
                <a href="/">トップ</a>
              </li>
              <li class="drawer-item">
                <a href="<?php bloginfo('url'); ?>/news/">お知らせ</a>
              </li>
              <li class="drawer-item">
                <a href="<?php bloginfo('url'); ?>/content/">事業内容</a>
              </li>
              <li class="drawer-item">
                <a href="<?php bloginfo('url'); ?>/works/">制作実績</a>
              </li>
              <li class="drawer-item">
                <a href="<?php bloginfo('url'); ?>/overview/">企業概要</a>
              </li>
              <li class="drawer-item">
                <a href="<?php bloginfo('url'); ?>/blog/">ブログ</a>
              </li>
              <li class="drawer-item">
                <a href="<?php bloginfo('url'); ?>/contact/">お問い合わせ</a>
              </li> 
            </ul>
          </div>
        </nav>
      </div>


      <nav class="header-nav u-desktop">
        <ul class="header-nav__list">
          <li class="header-nav__item">
            <a href="<?php bloginfo('url'); ?>/news/" class="animate-link">お知らせ</a>
          </li>
          <li class="header-nav__item">
            <a href="<?php bloginfo('url'); ?>/content/" class="animate-link">事業内容</a>
          </li>
          <li class="header-nav__item">
            <a href="<?php bloginfo('url'); ?>/works/" class="animate-link">制作実績</a>
          </li>
          <li class="header-nav__item">
            <a href="<?php bloginfo('url'); ?>/overview/" class="animate-link">企業概要</a>
          </li>
          <li class="header-nav__item">
            <a href="<?php bloginfo('url'); ?>/blog/" class="animate-link">ブログ</a>
          </li>
          <a href="<?php bloginfo('url'); ?>/contact/" class="btn-header btn-header-effect">お問い合わせ</a>
        </ul>
      </nav>
    </div>