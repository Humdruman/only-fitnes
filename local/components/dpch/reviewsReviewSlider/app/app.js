document.addEventListener('DOMContentLoaded', () => {
  if (window.innerWidth > 760) {
  } else {
    $('.reviews-review-slider').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      appendDots: $('.reviews-review-append-dots'),
      arrows: false
    });
  }
  
  window.addEventListener("resize", () => {
    if (window.innerWidth > 760) {
      $('.reviews-review-slider').slick('unslick');
    } else {
      $('.reviews-review-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        appendDots: $('.reviews-review-append-dots'),
        arrows: false
      });
    }
  })
})