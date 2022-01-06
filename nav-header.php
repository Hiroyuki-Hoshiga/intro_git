<header class="header">
  <div class="header__inner">
    <div class="header__left">
      <nav class="header-nav u-desktop">
        <ul class="header-nav__list">
          <li class="header-nav__item">
            <h1 class="header__logo">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo.png" alt="Engress">
            </h1>
          </li>
          <li class="header-nav__item">
            <a href="/" class="animate-link">ホーム</a>
          </li>
          <li class="header-nav__item">
            <a href="<?php bloginfo('url'); ?>/news/" class="animate-link">お知らせ</a>
          </li>
          <li class="header-nav__item">
            <a href="<?php bloginfo('url'); ?>/blog/" class="animate-link">ブログ</a>
          </li>
          <li class="header-nav__item">
            <a href="<?php bloginfo('url'); ?>/price/" class="animate-link">コース・料金</a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="header__right">
      <ul class="header__contact-items u-desktop">
        <li class="header__contact-item">
          <div class="header__info">
            <div class="header__business-hour">平日08:00〜20:00</div>
            <div class="header__tel">0123-456-7890</div>
          </div>
        </li>
        <li class="header__contact-item"><a href="<?php bloginfo('url'); ?>/contact/" class="btn btn--header_accent">資料請求</a></li>
        <li class="header__contact-item"><a href="<?php bloginfo('url'); ?>/contact/" class="btn btn--header_base">お問い合わせ</a></li>
      </ul>
      <div class="header__drawer drawer u-mobile">
        <input type="checkbox" id="drawer-check" class="drawer__hidden" >
        <label for="drawer__check" class="drawer__open"><span></span></label>
        <nav class="drawer__content">
          <div class="drawer__inner">
            <ul class="drawer__list">
              <li class="drawer__item"><a href="/">トップ</a></li>
              <li class="drawer__item"><a href="<?php bloginfo('url'); ?>/news/">お知らせ</a></li>
              <li class="drawer__item"><a href="<?php bloginfo('url'); ?>/content/">事業内容</a></li>
              <li class="drawer__item"><a href="<?php bloginfo('url'); ?>/works/">制作実績</a></li>
              <li class="drawer__item"><a href="<?php bloginfo('url'); ?>/overview/">企業概要</a></li>
              <li class="drawer__item"><a href="<?php bloginfo('url'); ?>/blog/">ブログ</a></li>
              <li class="drawer__item"><a href="<?php bloginfo('url'); ?>/contact/">お問い合わせ</a></li> 
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>

