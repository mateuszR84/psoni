<?php

namespace Studiodevs\Toolbox\Components;

use Cms\Classes\ComponentBase;
use Studiodevs\Toolbox\Models\Project;

/**
 * ProjectsList Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class ProjectsList extends ComponentBase
{
    public $projects;

    public function componentDetails()
    {
        return [
            'name' => 'Projects List Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [
            'program' => [
                'title' => 'Projekt',
                'type' => 'dropdown',
                'options' => Project::getProgramOptions(),
            ]
        ];
    }

    public function onRun()
    {
        $program = $this->property('program');
        $this->projects = Project::forProgram($program)->orderBy('created_at', 'desc')->get();
    }
}
