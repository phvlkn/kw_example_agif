"use strict";

$('.text').html($('.active > .carousel-caption').html());
$('#projects-carousel').on('slid.bs.carousel', function () {
  $('.text').html($('.active > .carousel-caption').html());
});