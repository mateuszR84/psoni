<?php namespace Studiodevs\Toolbox;

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
            'name' => 'Toolbox',
            'description' => 'Personalizowanie aplikacji',
            'author' => 'Studiodevs',
            'icon' => 'icon-wrench'
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
            'Studiodevs\Toolbox\Components\ReportsList' => 'reports',
            'Studiodevs\Toolbox\Components\DonorsList' => 'donors',
            'Studiodevs\Toolbox\Components\TeamDetails' => 'team',
        ];
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'studiodevs.toolbox.some_permission' => [
                'tab' => 'Toolbox',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * registerNavigation used by the backend.
     */
    public function registerNavigation()
    {
        return [
            'toolbox' => [
                'label' => 'Narzędzia',
                'url' => Backend::url('studiodevs/toolbox/reports'),
                'icon' => 'icon-sliders',
                'permissions' => ['studiodevs.toolbox.*'],
                'order' => 600,

                'sideMenu' => [
                    'reports' => [
                        'label'       => 'Sprawozdania finansowe',
                        'icon'        => 'icon-money',
                        'url'         => Backend::url('studiodevs/toolbox/reports'),
                    ],
                    'donors' => [
                        'label'       => 'Darczyńcy',
                        'icon'        => 'icon-gift',
                        'url'         => Backend::url('studiodevs/toolbox/donors'),
                    ],
                    'teams' => [
                        'label'       => 'Kadra',
                        'icon'        => 'icon-user',
                        'url'         => Backend::url('studiodevs/toolbox/teams'),
                    ],
                ]
            ],
        ];
    }
}
