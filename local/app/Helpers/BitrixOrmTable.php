<?php


namespace App\Helpers;

use App\Table\{CourseObjectiveTable, IncludedCourseTable, TraningTagsTable, SiteInfoTable, OptionDetailTable};

class BitrixOrmTable
{
    private static array $ormClasses = [
        CourseObjectiveTable::class,
        TraningTagsTable::class,
        SiteInfoTable::class,
        IncludedCourseTable::class,
        OptionDetailTable::class
    ];

    public static function detectClassByTableName(string $tableName)
    {
        $ormClass = '';
        foreach (self::$ormClasses as $class) {
            if($tableName === $class::getTableName()) {
                $ormClass = $class;
            }
        }
        return $ormClass;
    }
}