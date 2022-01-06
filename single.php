<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header(); ?>
</head>
<body>
  <?php get_template_part('nav-header'); ?>

  <div class="block80"></div>

  <div class="page-price__breadcrumbs breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <div class="breadcrumbs__inner l-inner">
    <?php if(function_exists('bcn_display')){
    bcn_display();
    }
    ?>
    </div>
  </div>
  <div class="single">
    <div class="single__inner l-inner">
      <div class="columns">
        <div class="columns__inner">
          <main class="columns-post">
            <div class="columns-post__category"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></div>
            <header class="columns-post__title">
              <h1 class="columns-post__main"><?php the_title(); ?></h1>
            </header>
            <div class="columns-post__info">
              <div class="columns-post__social"><?php get_template_part( 'sns' ); ?></div> 
              <p class="columns-post__time"><time datetime="2020/06/13"><?php the_time( "Y-m-d" ); ?></time></p>
            </div>
            <figure class="columns-post__thumbnail">
              <?php the_post_thumbnail( 'blog' ); ?>
            </figure>
            <article class="entry">
              <div class="entry__inner">
                <div class="entry__body">
                  <?php the_content(); ?>
                </div>
              </div>
            </article>            
          </main>
          <div class="recommend">
            <div class="recommend__header">おすすめの記事</div>
            <div class="recommend__body">
              <div class="cards-recommend">
                <?php
                $infoPosts = get_posts('numberposts=3');
                foreach($infoPosts as $post):
                ?>
                <a class="cards-recommend__item card-recommend" href="<?php the_permalink(); ?>">
                  <div class="card-recommend__image">
                    <?php the_post_thumbnail('thumbside'); ?>
                    <div class="card-recommend__cate">
                      <?php
                       $cat = get_the_category();
                       $catname = $cat[0]->cat_name;//カテゴリー名
                       $catslug = $cat[0]->slug;// スラッグ名
                     ?>
                     <span class="<?php echo $catslug; ?>"><?php echo $catname; ?></span>
                    </div>
                  </div>
                  <div class="card-recommend__body">
                    <span class="card-recommend__date"><?php the_time( 'Y-m-d' ); ?></span>
                    <h3 class="card-recommend__title"><?php the_title(); ?></h3>
                  </div>
                </a>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
        <aside class="columns-side">
          <div class="columns-side__related related">
            <div class="related__header">関連記事</div>
            <div class="related__body">
              <div class="cards-related">
                <?php
                $infoPosts = get_posts('numberposts=3');
                foreach($infoPosts as $post):
                ?>
                <a class="cards-related__item card-related" href="<?php the_permalink(); ?>">
                  <div class="card-related__image">
                    <?php the_post_thumbnail('thumbside'); ?>
                  </div>
                  <div class="card-related__body">
                    <h3 class="card-related__title"><?php the_title(); ?></h3>
                  </div>
                </a>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
          <div class="columns-side__category category">
            <div class="category__header">カテゴリー</div>
            <div class="category__body">
              <ul class="category__list">
                <?php
                $args = array(
                    'title_li' => ''
                );
                wp_list_categories($args);
                ?>
              </ul>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>










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
        } ?>
      </div>
    </div>
    <div class="page-contact__inner l-inner">
      <div class="page-contact__contact-form contact-form">
        <div class="contact-form">
          <div id="main-content">
            <?php if(have_posts()): ?>
              <?php while(have_posts()):the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <?php get_template_part('parts-contact'); ?>
<?php get_template_part('nav-footer'); ?>
<?php get_footer(); ?>
</body>
</html>