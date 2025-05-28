<?php

namespace StudioDevs\Bip\Components;

use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use StudioDevs\Bip\Models\Article;
use StudioDevs\Bip\Models\Category;
use StudioDevs\Bip\Models\Settings;

/**
 * Bip Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Bip extends ComponentBase
{
    public $articles;
    public $categoryArticles;
    public $category;
    public $sections;
    public $redactionAddress;
    public $editor;
    public $showRecent = true;
    public $instruction;
    public $articlePage;
    public $mainPage;

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
                'description' => 'studiodevs.bip::lang.components.bip.properties.page_description',
                'type' => 'dropdown',
                'options' => Article::getPageOptions(),
            ],
            'categorySlug' => [
                'title' => 'studiodevs.bip::lang.components.bip.properties.category_slug_title',
                'description' => 'studiodevs.bip::lang.components.bip.properties.category_slug_description',
                'type' => 'string',
                'default' => '{{ :slug }}'
            ],
            'articlePage' => [
                'title' => 'studiodevs.bip::lang.components.bip.properties.article_page',
                'description' => 'studiodevs.bip::lang.components.bip.properties.article_page_description',
                'type' => 'dropdown',
                'group' => 'studiodevs.bip::lang.components.bip.properties.group_pages',
            ],
            'mainPage' => [
                'title' => 'studiodevs.bip::lang.components.bip.properties.main_page',
                'description' => 'studiodevs.bip::lang.components.bip.properties.main_page_description',
                'type' => 'dropdown',
                'group' => 'studiodevs.bip::lang.components.bip.properties.group_pages',
            ],
        ];
    }

    public function getArticlePageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function getMainPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function onRun()
    {
        $this->articles = Article::published()
            ->getForPage($this->property('page'))
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        $this->sections = Category::where('page_code', $this->property('page'))->get();

        if ($this->property('categorySlug')) {
            $category = $this->category = Category::where('slug', $this->property('categorySlug'))->first();
            $this->categoryArticles = Article::forCategory($category->id)->get();
        }

        $this->articlePage = $this->property('articlePage');
        $this->mainPage = $this->property('mainPage');
        $this->redactionAddress = Settings::getRedactionAddress();
        $this->editor = Settings::getEditor();
        $this->instruction = Settings::getInstruction();
    }

    public function onFilterArticles()
    {
        $categorySlug = post('category');

        $category = Category::where('slug', $categorySlug)->first();
        $articles = $category
            ? $category->articles()->published()->getForPage($this->property('page'))->get()
            : collect();

        $categoryPage = $this->property('page') . '/bip/bip-category';

        return [
            '#articleList' => $this->renderPartial('@articles-list', [
                'articles' => $articles,
                'showRecent' => false,
                'activeCategory' => $category,
                'articlePage' => $this->property('articlePage'),
                'categoryPage' => $categoryPage,
            ])
        ];
    }
}
