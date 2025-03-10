<?php namespace Studiodevs\Toolbox\Components;

use Cms\Classes\ComponentBase;
use Studiodevs\Toolbox\Models\Dashboard;

/**
 * DashboardsList Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class DashboardsList extends ComponentBase
{
    public $dashboards;

    public function componentDetails()
    {
        return [
            'name' => 'Dashboards List Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->dashboards = Dashboard::get();
    }
}
