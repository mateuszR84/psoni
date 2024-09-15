<?php namespace Studiodevs\Toolbox\Components;

use Cms\Classes\ComponentBase;
use Studiodevs\Toolbox\Models\Report;

/**
 * ReportsList Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class ReportsList extends ComponentBase
{
    public $active;

    public $reports;

    public function componentDetails()
    {
        return [
            'name' => 'Lista sprawozdań',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [
            'active' => [
                'title' => 'Rok',
                'description' => 'Ustaw rok najnowszego sprawozdania',
                'default' => '2023',
                'type' => 'string',
            ]
        ];
    }

    public function onRun() 
    {
        $this->reports = Report::get();    
        $this->active = $this->property('active');
    }
}
