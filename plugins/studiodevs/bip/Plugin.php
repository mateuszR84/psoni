<?php

namespace StudioDevs\Bip;

use Backend;
use System\Classes\PluginBase;

/**
 * Plugin Information File
 *
 * @link https://docs.octobercms.com/3.x/extend/system/plugins.html
 */
class Plugin extends PluginBase
{
    /**
     * pluginDetails about this plugin.
     */
    public function pluginDetails()
    {
        return [
            'name' => 'Bip',
            'description' => 'Biuletyn Informacji Publicznej',
            'author' => 'StudioDevs',
            'icon' => 'icon-user-group'
        ];
    }

    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
        //
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        //
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return [
            'StudioDevs\Bip\Components\Bip' => 'bip',
            'StudioDevs\Bip\Components\BipArticle' => 'bipArticle',
        ];
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'studiodevs.bip.some_permission' => [
                'tab' => 'Bip',
                'label' => 'Some permission'
            ],
        ];
    }

    public function registerSettings()
    {
        return [
            'bip' => [
                'label' => 'studiodevs.bip::lang.settings.label',
                'description' => 'studiodevs.bip::lang.settings.description',
                'category' => 'Studiodevs',
                'icon' => 'icon-bullhorn',
                'class' => 'Studiodevs\Bip\Models\Settings',
                'order' => 200,
            ],
        ];
    }
}
