document.addEventListener('DOMContentLoaded', () => {
  const dots = $('.reviews-photo-append-dots');
  
  $('.reviews-photo-slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    dots: true,
    appendDots: dots,
    responsive: [
      {
        breakpoint: 880,
        settings: {
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false,
        }
      },
      {
        breakpoint: 1260,
        settings: {
          infinite: true,
          slidesToShow: 2,
          slidesToScroll: 2,
          dots: true,
          appendDots: dots,
        }
      }
    ]
  });
})