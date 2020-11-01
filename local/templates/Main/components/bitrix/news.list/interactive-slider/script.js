/**
 * @var {function} $ - Jquery
 */

(function () {
    document.addEventListener('DOMContentLoaded', () => {
        if (!$) {
            console.error('Interactive slider could not be started, jquery was not found');
            return;
        }

        const $slider = $('.interactive_slider-container');

        if ($slider.length <= 0) {
            console.error('The slide element was not found')
            return;
        }

        if (!$slider.slick) {
            console.error('the Slick library was not installed');
            return;
        }

        $slider.slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            appendDots: $('.interactive_slider-dots'),
        });

    });
})()


