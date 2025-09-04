<?php namespace Studiodevs\Toolbox\Components;

use Cms\Classes\Page;
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
    public $dashboardItemPage;

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
        return [
            'project' => [
                'title' => 'Projekt',
                'type' => 'dropdown',
                'options' => Dashboard::getProjectOptions(),
            ],
            'dashboardItemPage' => [
                'title' => 'Page',
                'type'  => 'dropdown',
            ],
        ];
    }

    public function onRun()
    {
        $project = $this->property('project');
        $this->dashboards = Dashboard::forProject($project)->orderBy('created_at', 'desc')->get();

        $this->dashboardItemPage = $this->property('dashboardItemPage');
    }

    public function getDashboardItemPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }
}
