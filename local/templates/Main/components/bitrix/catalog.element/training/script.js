document.addEventListener('DOMContentLoaded', () => {
    const dots = $('.detail_course-slider-dots');

    $('.detail_course-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        appendDots: dots,
        responsive: [
            {
                breakpoint: 1230,
                settings: {
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    appendDots: dots,
                    arrows: false
                }
            },
        ]
    });
})