document.addEventListener('DOMContentLoaded', () => {
  if (window.innerWidth > 880) {
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
  
  let windowWidth = window.innerWidth;
  window.addEventListener("resize", () => {
    if (windowWidth <= 880 && window.innerWidth > 880) {
      $('.reviews-review-slider').slick('unslick');
    } else if (windowWidth > 880 && window.innerWidth <= 880) {
      $('.reviews-review-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        appendDots: $('.reviews-review-append-dots'),
        arrows: false
      });
    }
    windowWidth = window.innerWidth;
  })
})
