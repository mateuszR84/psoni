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
    public $displayMode;

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
            'displayMode' => [
                'title' => 'Display Mode',
                'type'  => 'dropdown',
            ],
        ];
    }
    
    public function getDashboardItemPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function getDisplayModeOptions()
    {
        return [
            'single' => 'Single',
            'multiple' => 'Multiple',
        ];
    }

    public function onRun()
    {
        $project = $this->property('project');
        $this->dashboards = Dashboard::forProject($project)->orderBy('created_at', 'desc')->get();

        $this->displayMode = $this->property('displayMode');
        $this->dashboardItemPage = $this->property('dashboardItemPage');
    }
}
