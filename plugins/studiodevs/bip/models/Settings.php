<?php

namespace StudioDevs\Bip\Models;

use Model;

/**
 * Settings Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'bip_settings';

    public $settingsFields = 'fields.yaml';

    public function getPagesOptions(): array
    {
        return [
            'psoni' => 'PSONI',
            'orew' => 'OREW',
            'nps' => 'NPS',
            'sds' => 'ŚDS',
            'pu' => 'PU',
            'pp' => 'PP'
        ];
    }

    public static function getBipPages()
    {
        $bipPages = self::instance()->pages ?? [];

        $bipPagesArray = [];
        foreach ($bipPages as $page) {
            $bipPagesArray[$page] = strtoupper($page);
        }

        return $bipPagesArray;
    }
}
