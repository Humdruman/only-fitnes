document.addEventListener('DOMContentLoaded', () => {
  if (window.innerWidth > 760) {
    $('.main-slider').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      appendDots: $('.main-append-dots'),
    });
    
  }
  
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
      $('.main-slider').slick('unslick');
    }
  })
})