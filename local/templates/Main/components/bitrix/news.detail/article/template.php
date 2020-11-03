<?php
/**
 * @var array $arResult
 */

$APPLICATION->AddChainItem($arResult['NAME']);
$img = empty($arResult['DETAIL_PICTURE']) ? $arResult['PREVIEW_PICTURE']['SRC'] : $arResult['DETAIL_PICTURE']['SRC'];
$text = empty($arResult['DETAIL_TEXT']) ? $arResult['PREVIEW_TEXT'] : $arResult['DETAIL_TEXT'];
?>
<div class="section">
    <div class="section-flex-col">
        <div class="article">
            <img src="<?= $img ?>" alt="" class="article-img">
            <div class="article-text_wrap">
                <div class="article-title">
                    <?= $arResult['NAME'] ?>
                </div>
                <div class="article-text">
                    <?= $text ?>
                </div>
            </div>
        </div>
    </div>
</div>


