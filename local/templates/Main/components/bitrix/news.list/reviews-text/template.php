<?php
/**
 * @var array $arResult
 * @var array $arParams
 */


//pru($arResult['ITEMS']);
?>
<div class="section">
    <div class="reviews_text">
        <div class="reviews_text-title">
            Текстовые отзывы
        </div>
        <div class="reviews_text-container">
            <?php foreach ($arResult['ITEMS'] as $item) { ?>
                <div class="reviews_text-item">
                    <div class="reviews_text-name">
                        <?= $item['NAME'] ?>
                    </div>
                    <div class="reviews_text-detail">
                        <?= $item['DETAIL_TEXT'] ?>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</div>