<?php

use App\Services\ContentService;
use Bitrix\Main\Loader;
use App\Helpers\Vue;

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');

$content = ContentService::getInstance();
$content->offBreadcrumb();

$APPLICATION->SetTitle($APPLICATION->GetTitle());
Vue::includeComponent(['TextInput', 'CheckboxInput']);

$APPLICATION->IncludeComponent(
    'humdruman:model.view',
    'title',
    [
        'model' => \App\Model\Result\EmptyModel::class
    ]
);


?>


    <div class="section">
        <div class="l-flexible">
            <form action="" class="test_form">
                <div class="test_form-row">
                    <text-input title="Укажите ваш рост" name="text-field-1" placeholder="75 см"></text-input>
                    <text-input title="Укажите ваш вес" name="text-field-2" placeholder="55 кг"></text-input>
                </div>
                <div class="checkbox-row">
                    <div class="checkbox-row-title">
                        Расскажите про ваш опыт занятий спортом
                    </div>
                    <checkbox-input name="test" value="1" title="Нет, никогда не занималась"></checkbox-input>
                    <checkbox-input name="test" value="2" title="Занималась, но более 5 лет назад"></checkbox-input>
                    <checkbox-input name="test" value="3" title="Был, но давно. Около года не занимаюсь"></checkbox-input>
                </div>
                <div class="checkbox-row">
                    <div class="checkbox-row-title">
                        Расскажите про ваш опыт занятий спортом
                    </div>
                    <checkbox-input name="test1" value="1" title="Нет, никогда не занималась"></checkbox-input>
                    <checkbox-input name="test1" value="2" title="Занималась, но более 5 лет назад"></checkbox-input>
                    <checkbox-input name="test1" value="3" title="Был, но давно. Около года не занимаюсь"></checkbox-input>
                </div>
                <div class="checkbox-row">
                    <div class="checkbox-row-title">
                        Расскажите про ваш опыт занятий спортом
                    </div>
                    <checkbox-input name="test2" value="1" title="Нет, никогда не занималась"></checkbox-input>
                    <checkbox-input name="test2" value="2" title="Занималась, но более 5 лет назад"></checkbox-input>
                    <checkbox-input name="test2" value="3" title="Был, но давно. Около года не занимаюсь"></checkbox-input>
                </div>
                <div class="test_form-submit-row">
                    <div class="test_form-submit-title">
                        Готова узнать результат?
                    </div>
                    <div class="test_form-submit_button">
                        узнать результат
                    </div>
                </div>
            </form>
        </div>
    </div>


<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
