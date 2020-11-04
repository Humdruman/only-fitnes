<?php
/**
 * @var array $arParams
 */

?>


<section class="contact section">
    <div  class="contact-success section-flex-col" v-if="$store.getters.isSubmittedFeedback">
        <feedback-message class="contact-success_text"></feedback-message>
    </div>
    <div class="contact-container section-flex-col" v-if="!$store.getters.isSubmittedFeedback">

        <form id="contact_form_1"

              name="SIMPLE_FORM_1"
              class="contact-form fl-col"
              method="post" action="<?= $APPLICATION->GetCurPage()?>">
            <input type="hidden" name="WEB_FORM_ID" value="<?= $arParams['WEB_FORM_ID']?>">
            <h1><span class="big">Никак не определишься </span><br class="br">
                с программой и тарифом?</h1>
            <p>Оставь заявку, проконсультируем и поможем принять решение</p>
            <div class="contact-form-inputs">
                <input type="text"
                       name="form_text_1"
                       class="contact-form-inputs-text name"
                       placeholder="Ваше имя" required
                >
                <input type="text" name="form_text_2" class="contact-form-inputs-text phone" placeholder="+7" required>
                <input type="submit" name="web_form_submit" class="contact-form-inputs-submit" value="получить консультацию">
                <div class="contact-form-info fl-col">
                    <div class="contact-form-info-text">Или позвоните по номеру телефона:</div>
                    <div class="contact-form-info-phone">
                        <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_RECURSIVE" => "Y",
                                "PATH" => "/include/phone.html"
                            )
                        );?>
                    </div>
                </div>
            </div>
            <div class="personal-data">
                <input id="contactPersonalData" type="checkbox" class="personal-data-input" name=""
                       autocomplete="off"
                       required>
                <label for="contactPersonalData" class="personal-data-label">Я даю согласие на обработку
                    персональных
                    данных в соотвествии с политикой конфиденцальности</label>
            </div>
        </form>
    </div>
</section>
