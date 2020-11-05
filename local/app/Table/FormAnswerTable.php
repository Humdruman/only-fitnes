<?php


namespace App\Table;


use Bitrix\Main\Entity\DataManager;
use Bitrix\Main\Entity\IntegerField;
use Bitrix\Main\Entity\StringField;

class FormAnswerTable extends DataManager
{
    public static function getTableName()
    {
        return 'b_form_answer';
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
            new IntegerField('field_id', [
                'column_name' => 'FIELD_ID'
            ]),
            new StringField('field_type', [
                'column_name' => 'FIELD_TYPE'
            ])
        ];
    }
}