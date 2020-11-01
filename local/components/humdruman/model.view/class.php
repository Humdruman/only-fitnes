<?php

use \App\Model\Result\IResultModel;


class DiModelView extends \CBitrixComponent
{
    public function executeComponent()
    {
        if(!$this->checkModelParam()) {
            $this->__showError('Param `model` empty or not exits class for this model');
            return;
        }

        $model = $this->createModel();

        if($model === null) {
            return;
        }

        if($this->startResultCache()) {
            $this->arResult = $model->getResult();
            $this->includeComponentTemplate();
        }
    }

    private function checkModelParam(): bool
    {
        return !empty($this->arParams['model']) && class_exists($this->arParams['model']);
    }

    private function createModel(): ?IResultModel {

        $reflection = new \ReflectionClass($this->arParams['model']);

        if(!$reflection->implementsInterface(IResultModel::class)) {
            $this->__showError('Param `model` not valid need IResultModel instance');
            return null;
        }
        return $reflection->newInstance();
    }


}