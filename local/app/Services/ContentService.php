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
        if(!empty($this->siteSettingCache[$code])) {
            return  $this->siteSettingCache[$code];
        }
        $result = SiteInfoTable::getByCode($code);
        if(isset($result['value'])) {
            $this->siteSettingCache[$code] = $result['value'];
            return  $this->siteSettingCache[$code];
        }
        return '';
    }

    public function check(): void {
        AddEventHandler('main', 'OnEndBufferContent', [$this, 'getAll']);
    }

    public function getAll(&$content) {
        $content = str_replace('</body>', 'text</body>', $content);
    }


}