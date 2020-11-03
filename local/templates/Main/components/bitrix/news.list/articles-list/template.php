<?php
/**
 * @var array $arResult
 * @var array $arParams
 */


$items = array_filter($arResult['ITEMS'], static function($elem) use ($arParams) {
    return $elem['ID'] !== $arParams['CURRENT_ARTICLE'];
});
?>

<div class="section">
    <div class="section-flex-col articles_list">
        <div class="articles_list-title">
            Похожие статьи
        </div>
        <div class="articles_list-container">
            <?php foreach ($items as $key => $item) { ?>
                <?php
                if($key > 4) {
                    continue;
                }
                ?>
                <div class="articles_list-item">
                    <div class="articles_list-item_img_container">
                        <img src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" alt="" class="articles_list-item_img">
                    </div>
                    <div class="articles_list-item_name">
                        <a class="articles_list-item_link" href="<?= $item['DETAIL_PAGE_URL']; ?>">
                            <?= $item['NAME'] ?>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
