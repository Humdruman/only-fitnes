<?php


namespace App\Table;


class IncludedCourseTable extends DirectoryTypeTable
{
    public static function getTableName(): string
    {
        return 'b_hlbd_includedcourse';
    }
}