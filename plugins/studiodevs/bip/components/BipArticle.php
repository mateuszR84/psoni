<?php

namespace StudioDevs\Bip\Components;

use Cms\Classes\ComponentBase;
use StudioDevs\Bip\Models\Article;

/**
 * BipArticle Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class BipArticle extends ComponentBase
{
    public $article;

    public function componentDetails()
    {
        return [
            'name' => 'Bip Article Component',
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
                'title' => 'Alias',
                'description' => 'Alias artykułu',
                'type' => 'string',
                'default' => '{{ :slug }}'
            ]
        ];
    }

    public function onRun()
    {
        $this->article = $this->page['article'] = Article::where('slug', $this->property('slug'))->first();    

        if (!$this->article) {
            $this->setStatusCode(404);
            return $this->controller->run('404');
        }
    }
}
