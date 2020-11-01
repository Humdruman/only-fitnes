<?php


namespace App\Model\Result;


use App\Table\StepsStartedTable;

class StepsStarted implements IResultModel
{
    public function getResult(): array
    {
        $result = [];
        $result['title'] = 'Как это работает?';

        $result['items'] = StepsStartedTable::getList([
            'order' => ['sort' => 'ASC']
        ])->fetchAll();
        foreach ($result['items'] as &$item) {
            $item['img'] = \CFile::GetPath($item['img']);
        }

        return  $result;
    }

}