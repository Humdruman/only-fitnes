document.addEventListener('DOMContentLoaded', () => {
  $('.main-slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    appendDots: $('.main-append-dots'),
  });
  window.addEventListener("resize", () => {
    if (window.innerWidth > 760) {
      $('.main-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        appendDots: $('.main-append-dots'),
      });
  
    } else {
    }
  
  })
  $('.reviews-photo-slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    dots: true,
    appendDots: $('.reviews-photo-append-dots'),
  });
})