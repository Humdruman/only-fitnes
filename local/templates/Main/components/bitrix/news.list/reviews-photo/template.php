<?php
/**
 * @var array $arResult;
 *
 */

?>

<div class="section">
        <div class="reviews-photo fl-col">
            <h1 class="reviews-photo-title">Результаты и отзывы<br> наших клиенток</h1>
            <div class="slider-container">
                <div class="reviews-photo-slider">
                    <?php foreach ($arResult['ITEMS'] as $item) { ?>
                        <div class="reviews-photo-slider-photo">
                            <img src="<?= $item['DETAIL_PICTURE']['SRC']?>"
                                 alt="<?= $item['DETAIL_PICTURE']['ALT']?>"
                                 class="reviews-photo-slider-photo-img">
                        </div>
                    <?php }?>
                </div>
                <div class="reviews-photo-append-dots"></div>
            </div>
        </div>
</div>



