<?php
/**
 * @var array $arResult
 *
 */
?>


<div class="section">
    <div class="articles section-flex-col">
        <div class="articles-container">
            <?php foreach ($arResult['ITEMS'] as $item) { ?>
                <div class="articles-item">
                    <div class="articles-item_img_container">
                        <img src="<?= $item['PREVIEW_PICTURE']['SRC']?>" class="articles-item_img">
                    </div>
                    <div class="articles-item_text_container">
                        <div class="articles-item_title">
                            <?= $item['NAME'] ?>
                        </div>
                        <div class="articles-item_text">
                            <?= $item['PREVIEW_TEXT'] ?>
                        </div>
                        <a class="articles-item_btn" href="<?= $item['DETAIL_PAGE_URL']; ?>">
                            Продолжить чтение
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>