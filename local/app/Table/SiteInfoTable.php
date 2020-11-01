<?php

namespace App\Table;

use Bitrix\Main\Entity\DataManager;
use Bitrix\Main\Entity\{IntegerField, StringField};

class SiteInfoTable extends DataManager
{
    public static function getTableName()
    {
        return 'site_info';
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
            new StringField('code', [
                'required' => true,
                'column_name' => 'UF_CODE'
            ]),
            new StringField('value', [
                'column_name' => 'UF_VALUE'
            ])
        ];
    }

    public static function getByCode(string $code) {
        $entity = self::getList([
            'filter' => [
                'code' => $code
            ]
        ])->fetch();
        return $entity;
    }
}