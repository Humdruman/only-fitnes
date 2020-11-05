<?php
/** @var array $arResult
 * @var array $arParams
 *
 */
?>


<section class="workouts-and-reviews-background section">
    <div class="workouts section-flex-col">
        <?php if (!$arParams['DONT_SHOW_TITLE']) { ?>
            <h1>Популярные тренировки</h1>
        <?php } ?>
        <div class="workouts-cards">
            <?php foreach ($arResult['ITEMS'] as $item) { ?>
                <div class="workout-slide">
                    <div class="workouts-card fl-col">
                        <div class="workouts-card-img-container">
                            <img class="workouts-card-img" src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>">
                            <?php if (!empty($item['TRAINING_TAG'])) { ?>
                                <div class="info" style="background-color: <?= $item['TRAINING_TAG']['color'] ?>">
                                    <?= $item['TRAINING_TAG']['name'] ?>
                                </div>
                            <?php } ?>
                        </div>
                        <h2><?= $item['NAME'] ?></h2>
                        <p class="workouts-card-price">от 590 рублей</p>
                        <div class="workouts-card-links fl-row">
                            <?php if (!empty($item['PREVIEW_TEXT'])) { ?>
                                <div class="about_modal">
                                    <?= $item['PREVIEW_TEXT'] ?>
                                </div>
                            <?php } ?>

                            <div class="about">
                                Описание
                            </div>
                            <a href="<?= $item['DETAIL_PAGE_URL'] ?>" class="more">
                                узнать подробнее
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="workouts-append-dots"></div>
    </div>

</section>
