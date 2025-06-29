<?php

namespace Studiodevs\Toolbox\Components;

use Cms\Classes\ComponentBase;
use Studiodevs\Toolbox\Models\Project;

/**
 * ProjectDetails Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class ProjectItem extends ComponentBase
{
    public $project;
    
    public function componentDetails()
    {
        return [
            'name' => 'Project Details Component',
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
        $this->project = Project::where('slug', $this->property('slug'))->first();
    }
}
