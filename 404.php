<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");

?>

<div style="height: 500px; width: 100%">
    <h1 style="text-align: center">404</h1>
</div>

<?php

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>