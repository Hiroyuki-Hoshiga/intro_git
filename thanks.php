<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title>CodeUps</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name=”robots” content=”noindex”>
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <!-- ファビコン -->
  <link rel="”icon”" href="" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- Noto Sans JP -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
  <!-- Noto Serif JP -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;700&display=swap" rel="stylesheet">
  <!-- swiper_css -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <!-- css -->
  <link rel="stylesheet" href="/assets/css/styles.css">
  <!-- swiper_js -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script defer type="text/javascript" src="./assets/js/script.js"></script>
</head>
<body>
  <header class="header">
    <div class="header__inner">
      <h1 class="header__logo"><!-- h1タグに変更 REV01 -->
        <img src="/assets/images/common/CodeUps.png" alt="logo">
      </h1>

      <!-- hamburger部分 -->
      <div class="drawer u-mobile">
        <!-- hamburger_menu_ON.OFF_checkbox -->
        <input type="checkbox" id="drawer-check" class="drawer-hidden" >
        <!-- hamburger_icon -->
        <label for="drawer-check" class="drawer-open"><span></span></label>
        <!-- hamburger_menu -->
        <nav class="drawer-content">
          <div class="drawer-inner">
            <ul class="drawer-list">
              <li class="drawer-item"><a href="#">トップ</a></li>
              <li class="drawer-item"><a href="#">お知らせ</a></li>
              <li class="drawer-item"><a href="#">事業内容</a></li>
              <li class="drawer-item"><a href="#">制作実績</a></li>
              <li class="drawer-item"><a href="#">企業概要</a></li>
              <li class="drawer-item"><a href="#">ブログ</a></li>
              <li class="drawer-item"><a href="#">お問い合わせ</a></li> 
            </ul>
          </div>
        </nav>
      </div>
      <!-- hamburger部分終了 -->

      <nav class="header-nav u-desktop">
        <ul class="header-nav__list">
          <li class="header-nav__item">
            <a href="#" class="animate-link">お知らせ</a>
          </li>
          <li class="header-nav__item">
            <a href="#" class="animate-link">事業内容</a>
          </li>
          <li class="header-nav__item">
            <a href="#" class="animate-link">制作実績</a>
          </li>
          <li class="header-nav__item">
            <a href="#" class="animate-link">企業概要</a>
          </li>
          <li class="header-nav__item">
            <a href="" class="animate-link">ブログ</a>
          </li>
          <a href="#" class="btn-header btn-header-effect">お問い合わせ</a>
        </ul>
      </nav>
    </div>
  </header>


  <section class="thanks">
    <div class="thanks__inner l-inner">
      <p class="thanks__heading">お問い合わせ完了</p>
      <p class="thanks__text">
        3営業日以内に<br>
        返信させて頂きます。
      </p>
      <div class="thanks__btn">
        <a href="#" class="btn btn-effect btn--contact">TOPへ</a>
      </div>
    </div>
  </section>


  <footer class="footer">
    <div class="footer__inner">
      <div class="footer__menu">
        <div class="footer__logo"><img src="/assets/images/common/CodeUps.png" alt=""></div>
        <div class="footer-nav">
          <ul class="footer-nav__list">
            <li class="footer-nav__item"><a href="#" class="animate-link u-mobile">トップ</a></li>
            <li class="footer-nav__item"><a href="#" class="animate-link">お知らせ</a></li>
            <li class="footer-nav__item"><a href="#" class="animate-link">事業内容</a></li>
            <li class="footer-nav__item"><a href="#" class="animate-link">制作実績</a></li>
            <li class="footer-nav__item"><a href="#" class="animate-link">企業概要</a></li>
            <li class="footer-nav__item"><a href="#" class="animate-link">ブログ</a></li>
            <li class="footer-nav__item"><a href="#" class="animate-link">お問い合わせ</a></li> 
          </ul>
        </div>
      </div>
      <p class="footer__copyright"> © 2021 CodeUps Inc.</p>
      <div class="page-top-icon">
        <a href="#" id="page-top" class="back-button"><div class="arrow"></div></a>
      </div>
    </div>



  </footer>
</body>
</html>