<?php


namespace App\Services;


use App\Table\SiteInfoTable;
use App\Traits\Singleton;

class ContentService
{
    use Singleton;


    private array $siteSettingCache = [];


    public function getSiteSettingValue($code): string
    {
        if (!empty($this->siteSettingCache[$code])) {
            return $this->siteSettingCache[$code];
        }
        $result = SiteInfoTable::getByCode($code);
        if (isset($result['value'])) {
            $this->siteSettingCache[$code] = $result['value'];
            return $this->siteSettingCache[$code];
        }
        return '';
    }

    public function offBreadcrumb(): void {
        global $APPLICATION;
        $APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
    }

    public function setPageTitle(?string $title) {
        global $APPLICATION;
        $APPLICATION->SetTitle($title);
    }

    public function setBodyTheme(string $theme): void
    {
        AddEventHandler(
            'main',
            'OnEndBufferContent',
            static function (&$content) use ($theme) {
                $content = str_replace('#BODY_THEME#', $theme, $content);
            });
    }


}