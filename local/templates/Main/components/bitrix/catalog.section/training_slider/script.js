document.addEventListener('DOMContentLoaded', () => {
    if (window.innerWidth > 880) {
    } else {
        $('.workouts-cards').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            appendDots: $('.workouts-append-dots'),
        });
    }

    let windowWidth = window.innerWidth;
    window.addEventListener("resize", () => {
        if (windowWidth <= 880 && window.innerWidth > 880) {
            $('.workouts-cards').slick('unslick');
        } else if (windowWidth > 880 && window.innerWidth <= 880) {
            $('.workouts-cards').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                appendDots: $('.workouts-append-dots'),
            });
        }
        windowWidth = window.innerWidth;
    })
})

$(document).on('DOMContentLoaded', () => {
   const $slide = $('.workout-slide');
    $slide.find('.about').hover((e)=> {
        setDisplay(e.target, 'block')
    }, (e) => {
        setDisplay(e.target, 'none')
    })

    function setDisplay(elem, display) {
        $(elem).parent().find('.about_modal').css({"display": display})
    }
});
