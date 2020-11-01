<?php


namespace App\Model\Result\Factory;


use App\Model\Result\IResultModel;

interface IFactory
{
    public function getModel(): IResultModel;
}