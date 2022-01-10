<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header(); ?>
</head>
<body>
  <?php get_template_part('nav-header'); ?>

  <div class="mv">
    <div class="mv__billboard billboard">
      <div class="billboard__inner">
        <div class="billboard__copy">
          <h2 class="billboard__main">TOEFL対策はEngress</h2>
          <h3 class="billboard__sub">日本人へのTOEFL指導歴豊かな講師陣の<br>コーチング型TOEFLスクール</h3>
          <button class="billboard__btn btn btn--mv">資料請求</button>
          <div class="billboard__contact">
            <a class="" href="">お問い合わせ</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="home-lead">
    <div class="home-lead__inner l-inner">
      <div class="home-lead__heading"><p>TOEFL学習で<br>こんな悩みありませんか？</p></div>
      <ul class="home-lead__worries-list">
        <li class="home-lead__worries-item"><p>勉強の習慣が<br>身についていない</p></li>
        <li class="home-lead__worries-item"><p>勉強しているはず<br>なのに点数が伸びない</p></li>
        <li class="home-lead__worries-item"><p>正しい勉強方法が<br>わからない</p></li>
      </ul>
      <div class="home-lead__double-box">
        <h3>Engressは<br><span>TOEFLに特化したスクール</span>です</h3>
        <p>完全オーダーメイドで、<br>１人１人の悩みに合わせた最適な指導で</p>
        <p>TOEFLの苦手分野を克服します。</p>
      </div>
    </div>
  </div>


  <section class="features">
    <div class="feaures__inner l-inner">
      <div class="features__heading"><p>TOEFL対策に特化したEngress3つの強み</p> </div>
      <ul class="features__medias medias">
      <li class=" medias__item media">
        <div class="media__body">
          <div class="media__desc">
            <div class="media__label">特長 １</div>
            <h3 class="media__title">TOEFLに最適化された<br>無駄のないカリキュラム</h3>
            <p class="media__text">
            TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p>
          </div>
        </div>
        <figure class="media__image-wrapper">
          <img class="media__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/feature01.png" alt="">
        </figure>
      </li>
      <li class=" medias__item media media--row-reverse">
        <div class="media__body">
          <div class="media__desc">
            <div class="media__label">特長 ２</div>
            <h3 class="media__title">日本人指導歴10年以上の<br>経験豊富な講師陣</h3>
            <p class="media__text">
              Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。</p>
            </div>
          </div>
          <figure class="media__image-wrapper">
            <img class="media__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/feature02.png" alt="">
          </figure>
        </li>
        <li class="medias__item media">
          <div class="media__body">
            <div class="media__desc">
              <div class="media__label">特長 ３</div>
              <h3 class="media__title">平均3ヶ月でTOEFL iBT20点アップ</h3>
              <p class="media__text">
              Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。</p>
            </div>
          </div>
          <figure class="media__image-wrapper">
            <img class="media__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/feature03.png" alt="">
          </figure>
        </li>
      </ul>
    </div>
  </section>


  <section class="price">
    <div class="price__inner">
      <div class="price__billboard-price billboard-price">
        <div class="billboard-price__copy">
          <h2 class="billboard-price__main">Engressの料金プランはこちら</h2>
          <button class="billboard-price__btn btn btn--price">料金を見てみる</button>
        </div>
      </div>
    </div>
  </section>


  <section class="model">
    <div class="model__inner l-inner">
      <div class="model__heading"><p>TOEFL成功事例</p></div>
      <ul class="cards-model">
        <?php if (have_posts()): while(have_posts()): the_post(); ?>
        <li class="cards-model__item card-model">
          <div class="card-model__copy">
            <?php if( get_field('copy1') ) { ?>
              <?php the_field('copy1'); ?>
            <?php } ?>
          </div>
          <div class="card-model__image">
            <?php $image = get_field('image1'); if( !empty($image) ): ?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?>
          </div>
          <div class="card-model__body">
            <div class="card-model__title">
              <div class="card-model__occupation">
                <?php if( get_field('occupation1') ) { ?>
                  <?php the_field('occupation1'); ?>
                <?php } ?>
              </div>
              <div class="card-model__name">
                <?php if( get_field('name1') ) { ?>
                  <?php the_field('name1'); ?>
                <?php } ?>
              </div>
            </div>
            <div class="card-model__score">
              <?php if( get_field('score1') ) { ?>
                <?php the_field('score1'); ?>
              <?php } ?>
            </div>
          </div>
        </li>
        <li class="cards-model__item card-model">
          <div class="card-model__copy">
            <?php if( get_field('copy2') ) { ?>
              <?php the_field('copy2'); ?>
            <?php } ?>
          </div>
          <div class="card-model__image">
            <?php $image = get_field('image2'); if( !empty($image) ): ?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?>
          </div>
          <div class="card-model__body">
            <div class="card-model__title">
              <div class="card-model__occupation">
                <?php if( get_field('occupation2') ) { ?>
                  <?php the_field('occupation2'); ?>
                <?php } ?>
              </div>
              <div class="card-model__name">
                <?php if( get_field('name2') ) { ?>
                  <?php the_field('name2'); ?>
                <?php } ?>
              </div>
            </div>
            <div class="card-model__score">
              <?php if( get_field('score2') ) { ?>
                <?php the_field('score2'); ?>
              <?php } ?>
            </div>
          </div>
        </li>
        <li class="cards-model__item card-model">
          <div class="card-model__copy">
            <?php if( get_field('copy3') ) { ?>
              <?php the_field('copy3'); ?>
            <?php } ?>
          </div>
          <div class="card-model__image">
            <?php $image = get_field('image3'); if( !empty($image) ): ?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?>
          </div>
          <div class="card-model__body">
            <div class="card-model__title">
              <div class="card-model__occupation">
                <?php if( get_field('occupation3') ) { ?>
                  <?php the_field('occupation3'); ?>
                <?php } ?>
              </div>
              <div class="card-model__name">
                <?php if( get_field('name3') ) { ?>
                  <?php the_field('name3'); ?>
                <?php } ?>
              </div>
            </div>
            <div class="card-model__score">
              <?php if( get_field('score3') ) { ?>
                <?php the_field('score3'); ?>
              <?php } ?>
            </div>
          </div>
        </li>
        <?php endwhile; endif; ?>
      </ul>
    </div>
  </section>


<section class="flow">
  <div class="flow__inner l-inner">
    <div class="flow__heading"><p>ご利用の流れ</p></div>
    <ul class="flow__list">
      <li class="flow__item">
        <span>01</span>
        <dl>
          <dt><p>お問い合わせ</p></dt>
          <dd>まずはフォームまたはお電話からお申し込みください。</dd>
        </dl>
      </li>
      <li class="flow__item">
        <span>02</span>
        <dl>
          <dt><p>ヒアリング</p></dt>
          <dd>現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</dd>
        </dl>
      </li>
      <li class="flow__item">
        <span>03</span>
        <dl>
          <dt><p>学習プランのご提供</p></dt>
          <dd>目標達成のために最適な学習プランをご提案致します。</dd>
        </dl>
      </li>
      <li class="flow__item">
        <span>04</span>
        <dl>
          <dt><p>ご入会</p></dt>
          <dd>お申込み完了後、レッスンがスタートします。</dd>
        </dl>
      </li>
    </ul>
  </div>
</section>

<section class="faq">
  <div class="faq__inner l-inner">
    <div class="faq__heading"><p>よくある質問</p></div>
    <div class="faq__accordion accordion">
      <div class="accordion-container">
        <h4 class="accordion-title jsAccordionTitle">Engressはサラリーマンでも学習を続けられるでしょうか？</h4>
        <div class="accordion-content">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</div>
        <h4 class="accordion-title jsAccordionTitle">教材はオリジナルのものを使用しているのでしょうか？</h4>
        <div class="accordion-content">ここにアコーディオンの内容が入ります。改行されてもボックスは自動的に拡張されます。</div>
        <h4 class="accordion-title jsAccordionTitle">講師に日本人はいますか？</h4>
        <div class="accordion-content">ここにアコーディオンの内容が入ります。改行されてもボックスは自動的に拡張されます。</div>
        <h4 class="accordion-title jsAccordionTitle">TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</h4>
        <div class="accordion-content">ここにアコーディオンの内容が入ります。改行されてもボックスは自動的に拡張されます。</div>
      </div><!-- accordion__container -->
    </div><!-- /.accordion -->
  </div><!-- /.faq__inner -->
</section>
  
  
  <section class="post">
    <div class="post__inner l-inner">
      <div class="blog">
        <div class="blog__inner">
          <h2 class="blog__header section-header">ブログ</h2>
          <div class="blog__body">
            <div class="cards-top">
              <?php
              $infoPosts = get_posts('numberposts=3');
              foreach($infoPosts as $post):
              ?>
              <a class="cards-top__item card-top" href="<?php the_permalink(); ?>">
                <div class="card-top__image">
                  <?php the_post_thumbnail('thumbside'); ?>
                  <div class="card-top__cate">
                  <?php
                      $cat = get_the_category();
                      $catname = $cat[0]->cat_name;//カテゴリー名
                      $catslug = $cat[0]->slug;// スラッグ名
                    ?>
                    <span class="<?php echo $catslug; ?>"><?php echo $catname; ?></span>
                  </div>
                </div>
                <div class="card-top__body">
                  <h3 class="card-top__title"><?php the_title(); ?></h3>
                  <span class="card-top__date"><?php the_time( 'Y-m-d' ); ?></span>
                </div>
              </a>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="news">
        <div class="news__inner">
          <h2 class="news__header section-header">お知らせ</h2>
          <?php 
          $args = array(
            'post_type' => 'news',
            'posts_per_page' => '3'
          ); 
          $the_query = new WP_query($args);
          if ($the_query->have_posts()):
          ?>
          <div class="news__body">
            <ul class="news__list">
              <?php while($the_query->have_posts()): $the_query->the_post(); ?>
              <li class="news__item">
                <div class="news__info">
                  <time datetime="2020.07.20"><?php the_time( 'Y-m-d' ); ?></time>
                </div>
                <h3 class="news__title">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
              </li>
              <?php endwhile; ?>
            </ul>
          </div>
          <?php wp_reset_postdata(); endif; ?>
        </div>
      </div>
    </div>
  </section>


<?php get_template_part('parts-contact'); ?>
<?php get_template_part('nav-footer'); ?>
<?php get_footer(); ?>
</body>
</html>
