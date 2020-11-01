document.addEventListener('DOMContentLoaded', () => {
    const rDots = $('.reviews-photo-append-dots');

    $('.reviews-photo-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        dots: true,
        appendDots: rDots,
        responsive: [
            {
                breakpoint: 1000,
                settings: {
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false,
                }
            },
            {
                breakpoint: 1250,
                settings: {
                    infinite: true,
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    dots: true,
                    appendDots: rDots,
                }
            }
        ]
    });
})