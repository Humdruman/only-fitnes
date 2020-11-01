<?php


namespace App\Model\Result;


class EmptyModel implements IResultModel
{
    public function getResult(): array
    {
        return [];
    }

}