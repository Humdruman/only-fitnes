<?php


namespace App\Model\Result;


class FakeResult implements IResultModel
{
    public function getResult(): array
    {
        global $DB;

        $res = $DB->Query('SELECT * FROM b_iblock_element');

        return  $res->Fetch();
    }

}