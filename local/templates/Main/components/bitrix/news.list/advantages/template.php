<?php
/**
 * @var $templateFolder
 */
?>




<section class="advantages section">
    <div class="advantages_wrapper section-flex-col">
        <h1>Персональный подход</h1>
        <div class="advantages_girl-container">
            <img class="advantages-girl_img" src="<?= "$templateFolder/images/bg_small.png" ?>" alt="">
        </div>
        <div class="advantages-container">
            <div class="advantages-info fl-col">
                <div class="advantages-info-img img-device"></div>
                <h2>
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        [
                            "AREA_FILE_SHOW" => "file",
                            'PATH' => '/include/advantages/title_1.html'
                        ]
                    ); ?>
                </h2>
                <p>
                    Получить ответ на любой <br>
                    вопрос по питанию или программе тренировок <br>
                    можно в личном чате в удобное время
                </p>
            </div>
            <div class="advantages-info fl-col">
                <div class="advantages-info-img img-result"></div>
                <h2>Комплексная поддержка</h2>
                <p>Не только даем программы тренировок,<br>
                    но и разрабатывает персональные планы питания<br>
                    с учетом ваших целей и выбранного курса.
                </p>
            </div>
            <div class="advantages-info fl-col">
                <div class="advantages-info-img img-achievements"></div>
                <h2>Реальные результаты</h2>
                <p>С нами больше 2000 девушек стали<br>
                    еще сексуальнее и получили стройное <br>
                    подтянутое тело, избавившись от жира в проблемных местах.</p>
            </div>
            <div class="advantages-info fl-col">
                <div class="advantages-info-img img-teach"></div>
                <h2>Опытные тренеры</h2>
                <p>Разрабатывают и курируют<br>
                    программы сертифицированные тренеры, <br>
                    мастера спорта и победители спортивных соревнований.</p>
            </div>
        </div>
    </div>
</section>
