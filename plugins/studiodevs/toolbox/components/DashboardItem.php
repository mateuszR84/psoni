<?php

namespace Studiodevs\Toolbox\Components;

use Cms\Classes\ComponentBase;
use Studiodevs\Toolbox\Models\Dashboard;

/**
 * DashboardItem Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class DashboardItem extends ComponentBase
{
    public $dashboard;
    
    public function componentDetails()
    {

        return [
            'name' => 'Dashboard Item Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [
            'slug' => [
                'title' => 'Slug',
                'type'  => 'string',
            ],
        ];
    }

    public function onRun()
    {
        $this->dashboard = Dashboard::where('slug', $this->property('slug'))->first();
    }
}
