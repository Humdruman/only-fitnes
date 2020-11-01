<?php
/**
 * @var array $arResult;
 */

?>

<div class="section">
    <div class="reviews-review-container">
        <div class="reviews-review-slider">
            <?php foreach ($arResult['ITEMS'] as $item) { ?>
                <div class="reviews-review-slide">
                    <div class="reviews-review fl-col">
                        <h2><?= $item['NAME'] ?></h2>
                        <a href="" class="instagram">
                            <?= $item['PROPERTIES']['INST_NICK']['VALUE'] ?>
                        </a>
                        <p>
                            <?= $item['DETAIL_TEXT']; ?>
                        </p>
                        <div class="reviews-review-img"></div>
                    </div>
                </div>
            <?php }?>
        </div>
        <div class="reviews-review-append-dots"></div>
    </div>
</div>
