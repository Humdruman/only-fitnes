<?php


namespace App\Table;


use Bitrix\Main\Entity\DataManager;
use Bitrix\Main\Entity\IntegerField;
use Bitrix\Main\Entity\StringField;
use Bitrix\Main\Entity\TextField;

abstract class DirectoryTypeTable extends DataManager
{
    public static function getMap()
    {
        return [
            new IntegerField('id', [
                'required' => true,
                'column_name' => 'ID',
                'primary' => true,
                'autocomplete' => true
            ]),
            new StringField('img', [
                'column_name' => 'UF_FILE',
                'fetch_data_modification' => static function () {
                    return [
                        static function ($value) {
                            return \CFile::GetPath($value);
                        }
                    ];
                }
            ]),
            new IntegerField('UF_FILE', [
                'required' => true,
            ]),
            new StringField('name', [
                'required' => true,
                'column_name' => 'UF_NAME'
            ]),
            new TextField('UF_XML_ID'),
        ];
    }
}