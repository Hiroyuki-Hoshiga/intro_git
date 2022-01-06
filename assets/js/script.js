"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる
  var topBtn = $('.pagetop');
  topBtn.hide(); // ボタンの表示設定

  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  }); // ボタンをクリックしたらスクロールして上に戻る

  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  }); //ドロワーメニュー

  $("#MenuButton").click(function () {
    // $(".l-drawer-menu").toggleClass("is-show");
    // $(".p-drawer-menu").toggleClass("is-show");
    $(".js-drawer-open").toggleClass("open");
    $(".drawer-menu").toggleClass("open");
    $("html").toggleClass("is-fixed");
  }); // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  $(document).on('click', 'a[href*="#"]', function () {
    var time = 400;
    var header = $('header').innerHeight();
    var target = $(this.hash);
    if (!target.length) return;
    var targetY = target.offset().top - header;
    $('html,body').animate({
      scrollTop: targetY
    }, time, 'swing');
    return false;
  });
});
/* swiper01-MV用 */

var mySwiper01 = new Swiper('.swiper01', {
  // Optional parameters
  direction: 'vertical',
  loop: true,
  effect: "fade",
  //フェードのエフェクト
  autoplay: {
    delay: 2500,
    disableOnInteraction: false
  },
  speed: 2000,
  //２秒かけながら次の画像へ移動
  allowTouchMove: false //マウスでのスワイプを禁止

});
/* swiper02-WORKS用 */

var mySwiper02 = new Swiper('.swiper02', {
  // Optional parameters
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false
  },
  speed: 1000,
  //1秒かけながら次の画像へ移動
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true
  }
});
/* header-scroll */

var _window = $(window),
    _header = $('.header'),
    mvBottom;

_window.on('scroll', function () {
  mvBottom = $('.mv').height();

  if (_window.scrollTop() > mvBottom) {
    _header.addClass('header-scroll');
  } else {
    _header.removeClass('header-scroll');
  }
});

_window.trigger('scroll');
/* header-scroll */


var _window = $(window),
    _backbutton = $('.back-button'),
    mvBottom;

_window.on('scroll', function () {
  mvBottom = $('.mv').height();

  if (_window.scrollTop() > mvBottom) {
    _backbutton.addClass('active');
  } else {
    _backbutton.removeClass('active');
  }
});

_window.trigger('scroll');
/* Accordion */


$(function () {
  $('.jsAccordionTitle').on('click', function () {
    //nextは次の要素を取得する、今回はクリック要素の次の要素にis-showクラスをつけている
    $(this).next().toggleClass('is-open'); //クリックした要素自体にもclass付与

    $(this).toggleClass('is-active');
  });
});