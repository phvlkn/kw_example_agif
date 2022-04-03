"use strict";

var i = 1;
var projectsSwiper = new Swiper('.swiper-projects', {
  direction: 'horizontal',
  watchSlidesProgress: true,
  watchSldesVisibility: true,
  centeredSlides: true,
  slidesPerView: 'auto',
  spaceBetween: -175,
  loop: true,
  grabCursor: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    dynamicBullets: true // Красивый рендер

    /*renderBullet: function (index, className) {
      return '<span class="' + className + '">' + (index + 1) + '</span>';          // Рендер с цифрами
    },*/

  },
  on: {
    slideChangeTransitionStart: function slideChangeTransitionStart() {
      $(function () {
        $l = $('.quick-info').length;
        $divs = $('.quick-info');

        if (i > $l) {
          i = 1;
        }

        ;
        $($divs[i - 1]).css('display', 'block');

        if (i != 1) {
          $($divs[i - 2]).css('display', 'none');
        } else {
          $($divs[$l - 1]).css('display', 'none');
        }

        ;
        i = i + 1;
      });
    }
  }
});
var diplomasSwiper = new Swiper('.swiper-diplomas', {
  direction: 'horizontal',
  watchSlidesProgress: true,
  watchSldesVisibility: true,
  centeredSlides: true,
  slidesPerView: 'auto',
  spaceBetween: -75,
  loop: true,
  grabCursor: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    dynamicBullets: true // Красивый рендер

    /*renderBullet: function (index, className) {
      return '<span class="' + className + '">' + (index + 1) + '</span>';          // Рендер с цифрами
    },*/

  }
  /*on: {
      slideChangeTransitionStart: function() {
          $(function() {
              $l = $('.quick-info').length;
              $divs = $('.quick-info');
                if (i > $l) {
                  i = 1;
              };
                $($divs[i - 1]).css('display', 'block');
                if (i != 1) {
                  $($divs[i - 2]).css('display', 'none');
              } else {
                  $($divs[$l - 1]).css('display', 'none');
              };
                i = i + 1;
          });
      }
  }*/

});
var reviewsSwiper = new Swiper('.swiper-reviews', {
  direction: 'horizontal',
  watchSlidesProgress: true,
  watchSldesVisibility: true,
  centeredSlides: true,
  slidesPerView: 'auto',
  spaceBetween: -175,
  loop: true,
  grabCursor: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    dynamicBullets: true // Красивый рендер

    /*renderBullet: function (index, className) {
      return '<span class="' + className + '">' + (index + 1) + '</span>';          // Рендер с цифрами
    },*/

  }
});