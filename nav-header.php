<header class="header">
  <div class="u-desktop">
    <div class="header__inner">
      <div class="header__left">
        <nav class="header-nav u-desktop">
          <ul class="header-nav__list">
            <li class="header-nav__item">
              <h1 class="header__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo.png" alt="Engress">
              </h1>
            </li>
            <li class="header-nav__item"><a href="/" class="animate-link">ホーム</a></li>
            <li class="header-nav__item"><a href="<?php bloginfo('url'); ?>/news/" class="animate-link">お知らせ</a></li>
            <li class="header-nav__item"><a href="<?php bloginfo('url'); ?>/blog/" class="animate-link">ブログ</a></li>
            <li class="header-nav__item"><a href="<?php bloginfo('url'); ?>/price/" class="animate-link">コース・料金</a></li>
          </ul>
        </nav>
      </div>
      <div class="header__right">
        <ul class="header__contact-items">
          <li class="header__contact-item">
            <div class="header__info">
              <div class="header__business-hour">平日08:00〜20:00</div>
              <div class="header__tel">0123-456-7890</div>
            </div>
          </li>
          <li class="header__contact-item"><a href="<?php bloginfo('url'); ?>/contact/" class="btn btn--header_accent">資料請求</a></li>
          <li class="header__contact-item"><a href="<?php bloginfo('url'); ?>/contact/" class="btn btn--header_base">お問い合わせ</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="u-mobile">
    <div class="header__inner">
      <div class="header__left">
        <nav class="header-nav">
          <ul class="header-nav__list">
            <li class="header-nav__item">
              <h1 class="header__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo.png" alt="Engress">
              </h1>
            </li>
          </ul>
        </nav>
      </div>
      <div class="header__right">
      <button type="button" id="js-hamburger" class="button hamburger" aria-controls="js-glabal-menu" aria-expanded="false" area-label="メニューを開閉する">
      <span class="hamburger__line"></span>
    </button>
    <div class="sp-global-menu" id="js-global-menu" area-hidden="true">
      <nav>
        <ul>
          <li><a href="/">ホーム</a></li>
            <li><a href="<?php bloginfo('url'); ?>/news/">お知らせ</a></li>
            <li><a href="<?php bloginfo('url'); ?>/blog/">ブログ</a></li>
            <li><a href="<?php bloginfo('url'); ?>/price/">コース・料金</a></li>
            <li><a href="<?php bloginfo('url'); ?>/contact/">資料請求</a></li>
          <li><a href="<?php bloginfo('url'); ?>/contact/">お問い合わせ</a></li>
        </ul>
      </nav>
    </div><!-- /.sp-header-menu -->
      </div>
    </div>
  </div>
</header>

