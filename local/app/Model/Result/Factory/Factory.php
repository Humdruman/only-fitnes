<?php


namespace App\Model\Result\Factory;


use App\Model\Result\IResultModel;

class Factory implements IFactory
{
    private IResultModel $model;


    public function __construct(IResultModel $model)
    {
        $this->model = $model;
    }


    public function getModel(): IResultModel
    {
        return  $this->model;
    }

}