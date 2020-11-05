<?php
/**
 * @var array $arResult
 */

?>


<section class="detail_course-section">
    <div class="detail_course-slider">
        <?php foreach ($arResult['ITEMS'] as $item) { ?>
            <div class="detail_course-slider-slide"
                 style="background-image: url(<?= $item['DETAIL_PICTURE']['SRC'] ?>)">
                <div class="detail_course-slider-slide-content">
                    <h1><?= $item['NAME']; ?></h1>
                    <p>Подойдет ли тебе данный тренинг?</p>
                    <a href="/testing/" class="btn">Пройти тест</a>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="detail_course-slider-dots"></div>
</section>
