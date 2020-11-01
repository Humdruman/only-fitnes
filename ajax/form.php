<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');


if (CModule::IncludeModule("form")) {
    $success = CFormResult::Add($_POST['form_id'], [
        'form_text_1' => $_POST['name'],
        'form_text_2' => $_POST['phone'],
    ]);
    echo $success;
}

