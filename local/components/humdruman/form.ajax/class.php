<?php

use \Bitrix\Main\Engine\Contract\Controllerable;
use Bitrix\Main\Engine\ActionFilter\{Csrf};
use Bitrix\Main\Loader;

class FormAjaxComponent extends \CBitrixComponent implements Controllerable
{

    protected $errorCollection;

    public function __construct($component = null)
    {
        parent::__construct($component);
        Loader::includeModule('form');
    }

    public function configureActions()
    {
        return [
            'addResult' => [
                'prefilters' => [
                    new Csrf(false)
                ]
            ]
        ];
    }

    public function addResultAction(int $formId, string $data)
    {

        $fields = json_decode($data, true);


        if($fields === null || !is_array($fields)) {
            throw new InvalidArgumentException('Invalid data, expected json string');
        }

        $resultId = CFormResult::Add($formId, $fields);

        if($resultId === false) {
            throw new Exception("Error creating the result. Input data - formId: $formId, data: $data");
        }

        return [
            'resultId' => $resultId
        ];
    }
}