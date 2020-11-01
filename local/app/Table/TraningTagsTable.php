<?php


namespace App\Table;


use Bitrix\Main\Entity\DataManager;
use Bitrix\Main\Entity\IntegerField;
use Bitrix\Main\Entity\StringField;
use Bitrix\Main\Entity\TextField;

class TraningTagsTable extends DataManager
{
    private static $cache = [];

    public static function getTableName(): string
    {
        return 'training_tags';
    }

    public static function getMap()
    {
        return [
            new IntegerField('id', [
                'required' => true,
                'column_name' => 'ID',
                'primary' => true,
                'autocomplete' => true
            ]),
            new StringField('name', [
                'required' => true,
                'column_name' => 'UF_NAME'
            ]),
            new StringField('color', [
                'column_name' => 'UF_TAG_COLOR'
            ]),
            new TextField('UF_XML_ID')
        ];
    }

    public static function getByXmlId(string $xmlId) {
        if(isset(static::$cache[$xmlId])) {
            return static::$cache[$xmlId];
        }
        $tag = static::getList(['filter' => ['UF_XML_ID' => $xmlId]])->fetch();
        if(empty($tag)) {
            return [];
        }
        static::$cache[$tag['UF_XML_ID']] = $tag;
        return $tag;
    }
}