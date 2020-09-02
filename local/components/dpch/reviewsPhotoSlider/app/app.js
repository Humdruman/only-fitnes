document.addEventListener('DOMContentLoaded', () => {
  if (window.innerWidth > 760) {
    $('.reviews-photo-slider').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 3,
      dots: true,
      appendDots: $('.reviews-photo-append-dots'),
    });
  } else {
    $('.reviews-photo-slider').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
    });
  }
  
  window.addEventListener("resize", () => {
    if (window.innerWidth > 760) {
      $('.reviews-photo-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        dots: true,
        appendDots: $('.reviews-photo-append-dots'),
      });
    } else {
      $('.reviews-photo-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        appendDots: $('.reviews-photo-append-dots'),
      });
    }
  })
})