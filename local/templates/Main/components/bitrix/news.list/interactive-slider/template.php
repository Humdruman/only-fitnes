<?php
/**
 * @var $templateFolder
 */

$count = 1;

?>
<section class="interactive_slider">

    <div class="interactive_slider-bg">
        <div class="interactive_slider-bg_color"></div>
        <img class="interactive_slider-bg_girl" src="<?= "$templateFolder/images/girl_bg.png" ?>" alt="">
        <img class="interactive_slider-bg_girl_small" src="<?= "$templateFolder/images/girl_bg_small.png" ?>" alt="">
        <img class="interactive_slider-bg_img" src="<?= "$templateFolder/images/bg.jpg" ?>" alt="">
    </div>
    <div class="interactive_slider-container">
        <?php for ($i = 0; $count > $i; $i++) { ?>
            <div class="interactive_slider-slide">

                <div class="start main-slider-slide fl-row fl-col-media">
                    <div class="start-test">
                        <h1>Кто ещё хочет сексуальное тело?</h1>
                        <div class="workouts-card-links fl-row">
                            <div class="start-test-img"></div>
                            <p class="start-test-description">Пройдите <span class="pink">бесплатный онлайн-тест</span> и узнайте, какой тренинг
                                поможет получить сексуальную фигуру в 3 раза быстрее. Время прохождения теста – 5 минут.</p>
                        </div>
                        <a href="/testing/" class="start-test-button">начать прохождение теста</a>
                    </div>
                    <div class="start-clients">
                        <h2>С НАМИ УЖЕ<br>ЗАНИМАЮТСЯ</h2>
                        <div class="start-clients-container">
                            <div class="start-client fl-col">
                                <div class="start-client-img img-1"></div>
                                <div class="start-client-name">Ольга Бузова</div>
                            </div>
                            <div class="start-client fl-col">
                                <div class="start-client-img img-2"></div>
                                <div class="start-client-name">Виктория Боня</div>
                            </div>
                            <div class="start-client fl-col">
                                <div class="start-client-img img-3"></div>
                                <div class="start-client-name">Настасья Самбурская</div>
                            </div>
                            <div class="start-client fl-col">
                                <div class="start-client-img img-4"></div>
                                <div class="start-client-name">Анна Семенович</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="interactive_slider-dots"></div>
</section>
