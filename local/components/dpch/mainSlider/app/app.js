document.addEventListener('DOMContentLoaded', () => {
  $('.main-slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    appendDots: $('.interactive_slider'),
    responsive: [
      {
        breakpoint: 1440,
        settings: 'unslick'
      }
    ]
  });
  
  let windowWidth = window.innerWidth;
  window.addEventListener("resize", () => {
    if (windowWidth <= 1440 && window.innerWidth > 1440) {
      $('.main-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        appendDots: $('.interactive_slider'),
        responsive: [
          {
            breakpoint: 1440,
            settings: 'unslick'
          }
        ]
      });
    }
    windowWidth = window.innerWidth;
  })
})