document.addEventListener('DOMContentLoaded', () => {
  if (window.innerWidth > 760) {
  
  } else {
    $('.workouts-cards').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      appendDots: $('.workouts-append-dots'),
    });
  }
  
  window.addEventListener("resize", () => {
    if (window.innerWidth > 760) {
      $('.workouts-cards').slick('unslick');
    } else {
      $('.workouts-cards').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        appendDots: $('.workouts-append-dots'),
      });
    }
  })
})