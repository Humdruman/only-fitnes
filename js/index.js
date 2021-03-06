import OptionSelector from "./OptionSelector.js";

document.addEventListener('DOMContentLoaded', () => {
  
  (new OptionSelector('nav-link-btn')).start();
  
  
  if (window.innerWidth > 760) {
    $('.main-slider').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      appendDots: $('.interactive_slider'),
    });
  
    $('.reviews-photo-slider').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 3,
      dots: true,
      appendDots: $('.reviews-photo-append-dots'),
    });
    
  } else {
    
    $('.workouts-cards').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      appendDots: $('.workouts-append-dots'),
    });
  
    $('.reviews-photo-slider').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
    });
  
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
      $('.main-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        appendDots: $('.interactive_slider'),
      });
      
      $('.workouts-cards').slick('unslick');
  
      $('.reviews-photo-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        dots: true,
        appendDots: $('.reviews-photo-append-dots'),
      });
  
      $('.reviews-review-slider').slick('unslick');
    } else {
      $('.main-slider').slick('unslick');
      
      $('.workouts-cards').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        appendDots: $('.workouts-append-dots'),
      });
  
      $('.reviews-photo-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        appendDots: $('.reviews-photo-append-dots'),
      });
  
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