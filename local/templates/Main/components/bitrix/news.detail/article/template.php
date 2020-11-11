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
            <div class="article-begin">
                <div class="article-container_img">
                    <img src="<?= $img ?>" alt="" class="article-img">
                </div>
                <div class="article-text_wrap">
                    <div class="article-title">
                        <?= $arResult['NAME'] ?>
                    </div>
                    <div class="article-text">
                        <?= $text ?>
                    </div>
                </div>
            </div>
            <div class="article-detail">
                <?php
                $APPLICATION->IncludeComponent(
                    "sprint.editor:blocks",
                    ".default",
                    Array(
                        "ELEMENT_ID" => $arResult["ID"],
                        "IBLOCK_ID" => $arResult["IBLOCK_ID"],
                        "PROPERTY_CODE" => "DETAIL_PAGE",
                    ),
                    $component,
                    Array(
                        "HIDE_ICONS" => "Y"
                    )
                );
                ?>
            </div>
        </div>
    </div>
</div>


