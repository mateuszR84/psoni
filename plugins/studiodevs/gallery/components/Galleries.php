<?php namespace StudioDevs\Gallery\Components;

use Cms\Classes\ComponentBase;

/**
 * Galleries Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Galleries extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Galleries Component',
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
}
