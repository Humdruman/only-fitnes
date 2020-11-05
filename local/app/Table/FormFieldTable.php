<?php


namespace App\Table;


use Bitrix\Main\Entity\DataManager;
use Bitrix\Main\Entity\IntegerField;
use Bitrix\Main\Entity\StringField;

class FormFieldTable extends DataManager
{
    public static function getTableName()
    {
        return 'b_form_field';
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
            new IntegerField('form_id', [
                'column_name' => 'FORM_ID'
            ]),
            new StringField('title', [
                'column_name' => 'TITLE'
            ]),
            new StringField('type', [
                'column_name' => 'TITLE_TYPE'
            ])
        ];
    }
}