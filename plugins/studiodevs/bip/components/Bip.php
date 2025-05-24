<?php

namespace StudioDevs\Bip\Components;

use Cms\Classes\ComponentBase;
use StudioDevs\Bip\Models\Article;
use StudioDevs\Bip\Models\Category;

/**
 * Bip Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Bip extends ComponentBase
{
    public $articles;
    public $sections;

    public function componentDetails()
    {
        return [
            'name' => 'Bip Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [
            'page' => [
                'title' => 'studiodevs.bip::lang.components.bip.properties.page',
                'description' => 'studiodevs.bip::lang.components.bip.properties.description',
                'type' => 'dropdown',
                'options' => Article::getPageOptions(),
            ],
        ];
    }

    public function onRun()
    {
        $this->articles = Article::published()->getForPage($this->property('page'))->get();

        $this->sections = Category::get();
    }
}
