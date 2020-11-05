<?php
use App\Services\ContentService;


$content = ContentService::getInstance();
?>

<footer class="footer section">
    <div class="footer-container section-flex-row">
        <div class="site-logo-container fl-row">
            <a class="site-logo" href="/"></a>
            <div class="footer-title"><span class="online"></span>Онлайн<br>фитнес-школа</div>
            <div class="footer-devise-show"
                 @click="$('.mobile_menu').addClass('open'); $('body').css('overflow', 'hidden');"></div>
        </div>
        <div class="fl-row">
            <div class="fl-col">
                <div class="footer-phone">
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
                <div class="footer-email">
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
            <a href="<?= $content->getSiteSettingValue('INST_LINK')?>" class="footer-instagram"></a>
            <a href="<?= $content->getSiteSettingValue('VK_LINK')?>" class="footer-vk"></a>
            <a href="" class="footer-request" @click.prevent="$store.commit('setShowModal', true);">
                оставить заявку
            </a>
        </div>
    </div>
</footer>
<script>
    BX.Vue.create({
        el: '#app-vue',
        store: window.buex
    })
</script>
</div>
</div>
</body>
</html>


