<?php
/**
 * @var array $arResult
 */
?>


<?php if (!empty($arResult)) { ?>
    <section class="begin section">
        <div class="section-flex-col">
            <h1><?= $arResult['title'] ?></h1>
            <ul class="begin-cards">
                <?php foreach ($arResult['items'] as $key => $elem) { ?>
                    <li class="begin-card fl-col">
                        <div class="begin-card-img"
                             style="background-image: url(<?= $elem['img'] ?>">
                            <div class="begin-card-counter">
                                <?= $key + 1?>
                            </div>
                        </div>
                        <div class="begin-card-text">
                            <?= $elem['name'] ?>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </section>
<?php } ?>