<?php

/**
 * @var array $arResult
 * @var string $templateFolder
 */

?>


<section class="section">
    <div class="faq section-flex-col">
        <div class="faq-container">
            <?php foreach ($arResult['ITEMS'] as $item) { ?>
                <div class="faq-item">
                    <div class="faq-question">
                        <div class="faq-question_text">
                            <?= $item['NAME'] ?>
                        </div>
                        <div class="faq-question_btn_container">
                            <div class="faq-question_btn">
                                <div class="faq-question_btn_icon"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer_container">
                            <?= $item['DETAIL_TEXT'];?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
