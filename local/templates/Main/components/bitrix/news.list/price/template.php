<?php
/**
 * @var $templateFolder
 * @var array $arResult
 * @var array $arParams
 */
?>

<section class="pricing section">
    <div class="section-flex-col">

        <?php
        if (!$arParams['DONT_SHOW_TITLE']) { ?>
            <h1>Стоимость обучения</h1>
        <?php } ?>

        <div class="pricing-cards">
            <?php foreach ($arResult['ITEMS'] as $item) { ?>
                <?php
                $prop = $item['PROPERTIES'];
                ?>
                <div class="pricing-card">
                    <div class="pricing-card-container fl-col">
                        <h2 class="pink-1">
                            <?= $item['NAME'] ?>
                            <?php for ($i = 0; $i < $prop['NUM_STARTS']['VALUE']; $i++) { ?>
                                <span class="star"></span>
                            <?php } ?>
                        </h2>
                        <div class="fl-col">
                            <?php
                            foreach ($prop['OPTION_DETAIL']['DATA'] as $elem) { ?>
                                <div class="pricing-card-info fl-row">
                                    <div class="pricing-card-info-img"
                                         style="background-image: url(<?= $elem['img'] ?>)">

                                    </div>
                                    <div class="pricing-card-info-text">
                                        <?= $elem['name'] ?>
                                    </div>
                                    <div class="pricing-card-info-detail-btn">
                                        <div class="pricing-card-info-detail">
                                            <?= $elem['description'] ?>
                                        </div>
                                        <img src="<?= "$templateFolder/images/pricing/info.png" ?>">
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="pricing-card-price fl-row">
                            <div class="pricing-card-price-value">
                                <?= $prop['PRICE']['VALUE'] ?>Р
                            </div>
                            <div class="pricing-card-price-value disabled">
                                <?= $prop['OLD_PRICE']['VALUE'] ?>Р
                            </div>
                        </div>
                        <a class="pricing-card-pay" @click.prevent="$store.dispatch('pay', <?=$item['ID']?>)">
                            оплатить обучение
                        </a href="">
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
