<?php
/* 
Template Name: コース・料金
*/
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header(); ?>
</head>
<body>
<?php get_template_part('nav-header'); ?>


  <section class="page-price">
    <div class="page-price__mv page-mv">
      <div class="page-mv__inner">
        <div class="page-mv__copy">
          <h2 class="page-mv__main-title">コース・料金</h2>
        </div>
      </div>
    </div>
    <div class="page-price__breadcrumbs breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <div class="breadcrumbs__inner l-inner">
      <?php if(function_exists('bcn_display')){
      bcn_display();
      }
      ?>
      </div>
    </div>
    <div class="page-price__inner l-inner">
      <div class="page-price__header-charge">料金体系</div>
      <div class="page-price__price-system price-system">
        <div class="price-system__admission-fee">入会金 39,800円</div>
        <div class="price-system__plus">＋</div>
        <div class="price-system__monthly-cost">月額費用</div>
      </div>
      <div class="price-system__text">
        Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。
      </div>
      
      <div class="page-price__header-table">料金表</div>
      <div class="page-price__price-table">
        <div class="priceTable js-scrollable">
          <ul class="priceTable__list">
            <li class="priceTable__item">
              <div class="priceTable__header">基礎プラン</div>
              <div class="priceTable__body">
                <div class="priceTable__main">
                  <div class="priceTable__charge">59,000円~</div>
                  <div class="priceTable__monthly">*月額（税抜価格）</div>
                </div>
                <div class="priceTable__check">
                  <p><i class="fa fa-check"></i>カリキュラム作成</p>
                  <p><i class="fa fa-check"></i>TOEFL学習サポート</p>
                  <p><i class="fa fa-check"></i>週一回のビデオMTG</p>
                </div>
              </div>
            </li>
            <li class="priceTable__item">
              <div class="priceTable__header">演習プラン</div>
              <div class="priceTable__body">
                <div class="priceTable__main">
                  <div class="priceTable__charge">75,000円~</div>
                  <div class="priceTable__monthly">*月額（税抜価格）</div>
                </div>
                <div class="priceTable__check">
                  <p><i class="fa fa-check"></i>カリキュラム作成</p>
                  <p><i class="fa fa-check"></i>TOEFL学習サポート</p>
                  <p><i class="fa fa-check"></i>週一回のビデオMTG</p>
                  <p><i class="fa fa-check"></i>月二回の模試（解説 付き）</p>
                </div>
              </div>
            </li>
            <li class="priceTable__item priceTable__item--recommend">
              <div class="priceTable__header">志望校対策プラン</div>
              <div class="priceTable__body">
                <div class="priceTable__main">
                  <div class="priceTable__charge">95,000円~</div>
                  <div class="priceTable__monthly">*月額（税抜価格）</div>
                </div>
                <div class="priceTable__check">
                  <p><i class="fa fa-check"></i>カリキュラム作成</p>
                  <p><i class="fa fa-check"></i>TOEFL学習サポート</p>
                  <p><i class="fa fa-check"></i>週一回のビデオMTG</p>
                  <p><i class="fa fa-check"></i>月二回の模試（解説 付き）</p>
                  <p><i class="fa fa-check"></i>週一の英語面接対策</p>
                </div>
              </div>
            </li>
            <li class="priceTable__item priceCard">
              <div class="priceTable__header">フレックスプラン</div>
              <div class="priceTable__body">
                <div class="priceTable__main">
                  <div class="priceTable__charge">60,000円~</div>
                  <div class="priceTable__monthly">*月額（税抜価格）</div>
                </div>
                <div class="priceTable__check"><p>＊別途ご相談ください</p></div>
              </div>
            </li>
          </ul>
        </div>
      </div>



        </div>
      </section>
      
 
<?php get_template_part('parts-contact'); ?>
<?php get_template_part('nav-footer'); ?>
<?php get_footer(); ?>
</body>
</html>