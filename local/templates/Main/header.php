<?php

use Bitrix\Main\Page\Asset;
use App\Services\ContentService;
use App\Helpers\Vue;

global $APPLICATION;

$asset = Asset::getInstance();
$content = ContentService::getInstance();
CUtil::InitJSCore(['rxjs', 'jquery3', 'ui.vue', 'ui.vue.vuex']);
Vue::includeComponent(['AppModal', 'ModalForm', 'FeedbackMessage']);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title><?php $APPLICATION->ShowTitle() ?></title>
    <?php $asset->addCss(SITE_TEMPLATE_PATH . '/styles.css'); ?>
    <?php $asset->addJs(SITE_TEMPLATE_PATH . '/js/slider.js') ?>
    <?php $asset->addJs(SITE_TEMPLATE_PATH . '/js/vuex.js') ?>
    <?php $asset->addJs(SITE_TEMPLATE_PATH . '/js/script.js') ?>
    <?php $asset->addJs(SITE_TEMPLATE_PATH . '/js/plugin/slick-carousel@1.8.1.min.js') ?>
    <?php $asset->addJs(SITE_TEMPLATE_PATH . '/js/plugin/jquery.mask.min.js') ?>
    <?php $asset->addJs('local/components/dpch/nav/app/app.js') ?>
    <?php $asset->addJs('local/components/dpch/reviewsPhotoSlider/app/app.js'); ?>
    <?php $asset->addJs('local/components/dpch/reviewsReviewSlider/app/app.js'); ?>
    <?php $asset->addJs('local/components/dpch/workoutSlider/app/app.js'); ?>
    <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <?php $APPLICATION->ShowHead() ?>
    <?php $APPLICATION->ShowPanel() ?>
</head>
<body data-theme="#BODY_THEME#">
<div id="app-vue">
    <div class="app-template">
        <app-modal></app-modal>
        <header class="l-header">
            <?php
            $APPLICATION->IncludeComponent(
                'bitrix:menu',
                '',
                [
                    'MENU_CACHE_TYPE' => 'A',
                    'DELAY' => 'N'
                ]
            )
            ?>

            <div class="header_module">
                <div class="site_logo">
                    <a href="/" class="site_logo-img"></a>
                    <div class="site_logo-title">
                        <span class="site_logo-icon_online"></span>Онлайн<br>фитнес-школа
                    </div>
                    <div class="devise_show"></div>
                </div>
                <div class="feedback">
                    <div class="feedback-contact l-fl-col">
                        <div class="feedback-phone">
                            <?php
                            $APPLICATION->IncludeComponent(
                                'bitrix:highloadblock.view',
                                'header_phone',
                                [
                                    "BLOCK_ID" => 2,
                                    "CHECK_PERMISSIONS" => "Y",
                                    "ROW_ID" => 1,
                                ]
                            ); ?>
                        </div>
                        <div class="feedback-email">
                            <?php
                            $APPLICATION->IncludeComponent(
                                'bitrix:highloadblock.view',
                                'header_email',
                                [
                                    "BLOCK_ID" => 2,
                                    "CHECK_PERMISSIONS" => "Y",
                                    "ROW_ID" => 2,
                                ]
                            ); ?>
                        </div>
                    </div>
                    <div class="social_container">
                        <a href="<?= $content->getSiteSettingValue('VK_LINK') ?>" class="header_vk">
                            <img src="<?= SITE_TEMPLATE_PATH . '/images/vk.png' ?>" alt="" class="header_vk-icon">
                        </a>
                        <a href="<?= $content->getSiteSettingValue('INST_LINK') ?> " class="feedback-instagram"></a>
                    </div>
                    <a href="" class="feedback-request" @click.prevent="$store.commit('setShowModal', true);">
                        оставить заявку
                    </a>
                </div>
            </div>

        </header>
        <?php
        $APPLICATION->IncludeComponent(
            "bitrix:breadcrumb",
            "",
            [
                "START_FROM" => "0",
                "PATH" => "",
                "SITE_ID" => "s1"
            ]
        ); ?>

