<?php


namespace App\Table;


use Bitrix\Main\Entity\StringField;

class OptionDetailTable extends DirectoryTypeTable
{
    public static function getTableName(): string
    {
        return 'b_hlbd_optiondetail';
    }

    public static function getMap()
    {
        return array_merge(
            parent::getMap(),
            [
                new StringField('description', [
                    'column_name' => 'UF_DESCRIPTION'
                ])
            ]
        );
    }
}