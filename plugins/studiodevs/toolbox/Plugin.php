<?php

namespace Studiodevs\Toolbox;

use Event;
use Backend;
use Studiodevs\Toolbox\Models\Settings;
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
        $this->registerConsoleCommand('seed.post.categories.pages', \StudioDevs\Toolbox\Console\SeedPostCategoriesPages::class);
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        Event::subscribe(\StudioDevs\Toolbox\EventHandlers\PostHandler::class);
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return [
            'Studiodevs\Toolbox\Components\ReportsList' => 'reports',
            'Studiodevs\Toolbox\Components\DashboardsList' => 'dashboardsList',
            'Studiodevs\Toolbox\Components\DashboardItem' => 'dashboardItem',
            'Studiodevs\Toolbox\Components\DonorsList' => 'donors',
            'Studiodevs\Toolbox\Components\TeamDetails' => 'team',
            'Studiodevs\Toolbox\Components\ProjectsList' => 'projectsList',
            'Studiodevs\Toolbox\Components\ProjectItem' => 'projectItem',
            'Studiodevs\Toolbox\Components\SupportFormsList' => 'supportFormsList',
            'Studiodevs\Toolbox\Components\SupportFormItem' => 'supportFormItem',
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
                    'dashboards' => [
                        'label'       => 'Tablice informacyjne',
                        'icon'        => 'icon-object-group',
                        'url'         => Backend::url('studiodevs/toolbox/dashboards'),
                    ],
                    'projects' => [
                        'label'       => 'Projekty PFRON',
                        'icon'        => 'icon-common-file-star',
                        'url'         => Backend::url('studiodevs/toolbox/projects'),
                    ],
                    'support_forms' => [
                        'label'       => 'Formy wsparcia',
                        'icon'        => 'icon-user-group',
                        'url'         => Backend::url('studiodevs/toolbox/supportforms'),
                    ],
                ]
            ],
        ];
    }

    public function registerSettings()
    {
        return [
            'toolbox' => [
                'label' => 'Toolbox',
                'description' => 'Personalizacja projektu',
                'category' => 'Studiodevs',
                'icon' => 'icon-wrench',
                'class' => 'Studiodevs\Toolbox\Models\Settings',
                'order' => 100,
            ],
        ];
    }

    public function registerMarkupTags()
    {
        return [
            'functions' => [
                'getCategoryPage' => [Settings::class, 'getCategoryPage'],
            ]
        ];
    }
}
