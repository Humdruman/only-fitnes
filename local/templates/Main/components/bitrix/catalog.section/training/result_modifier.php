<?php
use Bitrix\Highloadblock\HighloadBlockTable;
use App\Table\TraningTagsTable;

/**
 * @var array $arResult
 */


$tags = [];
$tagsXmlId = [];

foreach ($arResult['ITEMS'] as $index => $item) {
    if(isset($item['PROPERTIES']['TAGS']['VALUE']) && $item['PROPERTIES']['TAGS']['VALUE'] !== ''){
        $tag = TraningTagsTable::getByXmlId($item['PROPERTIES']['TAGS']['VALUE']);
        if(!empty($tag)) {
            $arResult['ITEMS'][$index]['TRAINING_TAG'] = $tag;
        }
    }
}
