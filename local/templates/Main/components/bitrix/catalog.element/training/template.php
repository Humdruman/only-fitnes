<?php
/**
 * @var $arResult
 */


$props = $arResult['PROPERTIES'];

?>

<?php if (!empty($props['OBJECTIVE']['DATA'])) { ?>
    <section class="detail_cards-section">
        <div class="detail_cards-container">
            <h1>Какие цели решает курс?</h1>
            <div class="detail_cards">
                <?php foreach ($props['OBJECTIVE']['DATA'] as $elem) { ?>
                    <div class="detail_cards-item">
                        <img src="<?= $elem['img'] ?>" alt="">
                        <p><?= $elem['name'] ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>