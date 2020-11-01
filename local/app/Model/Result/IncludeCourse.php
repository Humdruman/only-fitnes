<?php


namespace App\Model\Result;


use App\Table\IncludedCourseTable;

class IncludeCourse implements IResultModel
{
    public function getResult(): array
    {
        $includes = [];
        $includes['title'] = 'Что входит в этот курс?';
        $includes['items'] = IncludedCourseTable::getList([

        ])->fetchAll();
       return $includes;
    }

}