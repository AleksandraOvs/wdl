const swiper = new Swiper('.section-hero__content__slider-block__slider', {
  slidesPerView: 3,
  spaceBetween: 15,
  loop: true,
  grabCursor: true,
  pagination: {
    el: '.swiper-numbers',
    type: 'fraction',
    renderFraction: function (currentClass, totalClass) {
      return '<span class="' + currentClass + '"></span>' +
        ' из ' +
        '<span class="' + totalClass + '"></span>';
    }
  },



  // navigation: {
  // nextEl: '.hero-slider__button-next',
  // prevEl: '.hero-slider__button-prev',
  // },

});

const swiperScheme = new Swiper('.floors-slider', {
  slidesPerView: 1,
  //loop: true,
  //effect: 'fade',
  grabCursor: true,
  navigation: {
    nextEl: '.floors-slider__button-next',
    prevEl: '.floors-slider__button-prev',
  },

});

const swiperCats = new Swiper('.cats-slider', {
  loop: true,
  spaceBetween: 5,
  grabCursor: true
  //centeredSlides: true
});