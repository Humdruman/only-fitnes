<?php


namespace App\Table;


use Bitrix\Main\Entity\DataManager;
use Bitrix\Main\Entity\IntegerField;
use Bitrix\Main\Entity\StringField;

class StepsStartedTable extends DataManager
{
    public static function getTableName(): string
    {
        return 'steps_started';
    }

    /**
     * @return array|\Bitrix\Main\Entity\public
     * @throws \Exception
     */
    public static function getMap()
    {
        return [
            new IntegerField('id', [
                'required' => true,
                'column_name' => 'ID',
                'primary' => true,
                'autocomplete' => true
            ]),
            new IntegerField('sort', [
                'column_name' => 'UF_SORT'
            ]),
            new IntegerField('img', [
                'column_name' => 'UF_IMG'
            ]),
            new StringField('name', [
                'column_name' => 'UF_NAME'
            ])
        ];
    }


}