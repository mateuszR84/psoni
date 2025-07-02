<?php

namespace StudioDevs\Toolbox\Components;

use Cms\Classes\ComponentBase;
use StudioDevs\Toolbox\Models\SupportForm;

/**
 * SupportFormItem Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class SupportFormItem extends ComponentBase
{
    public $supportForm;

    public function componentDetails()
    {
        return [
            'name' => 'Support Form Item Component',
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
        $this->supportForm = SupportForm::where('slug', $this->property('slug'))->first();
    }
}
