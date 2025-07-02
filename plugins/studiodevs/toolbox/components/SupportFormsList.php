<?php

namespace StudioDevs\Toolbox\Components;

use Cms\Classes\ComponentBase;
use StudioDevs\Toolbox\Models\SupportForm;

/**
 * SupportFormsList Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class SupportFormsList extends ComponentBase
{
    public $supportForms;

    public function componentDetails()
    {
        return [
            'name' => 'Support Forms List Component',
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
                'options' => SupportForm::getProgramOptions(),
            ]
        ];
    }

    public function onRun()
    {
        $program = $this->property('program');
        $this->supportForms = SupportForm::forProgram($program)->get();
    }
}
