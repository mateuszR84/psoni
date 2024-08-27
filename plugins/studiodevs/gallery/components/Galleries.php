<?php

namespace StudioDevs\Gallery\Components;

use Lang;
use Cms\Classes\ComponentBase;
use StudioDevs\Gallery\Models\Gallery;
use StudioDevs\Gallery\Models\Category;

/**
 * Galleries Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Galleries extends ComponentBase
{
    public $galleries;
    
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
        return [
            'categoryFilter' => [
                'title'       => 'studiodevs.gallery::lang.components.galleries.properties.category_filter',
                'description' => 'studiodevs.gallery::lang.components.galleries.properties.category_filter_desc',
                'type'        => 'dropdown',
                'emptyOption' => 'Wybierz kategorię',
            ],
            'galleriesPerPage' => [
                'title'             => 'studiodevs.gallery::lang.components.galleries.properties.galleries_per_page',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'rainlab.blog::lang.settings.posts_per_page_validation',
                'default'           => '12',
            ],
            'noGalleriesMessage' => [
                'title'             => 'studiodevs.gallery::lang.components.galleries.properties.no_galleries_message',
                'description'       => 'studiodevs.gallery::lang.components.galleries.properties.no_galleries_message_desc',
                'type'              => 'string',
                'default'           => Lang::get('studiodevs.gallery::lang.components.galleries.properties.no_galleries_message_default'),
                'showExternalParam' => false,
            ],
            'isPublished' => [
                'title'             => 'studiodevs.gallery::lang.components.galleries.properties.is_published',
                'description'       => 'studiodevs.gallery::lang.components.galleries.properties.is_published_desc',
                'type'              => 'checkbox',
                'default'           => true
            ],
        ];
    }

    public function getCategoryFilterOptions(): array
    {
        $options = [];

        foreach (Category::all() as $category) {
            $options[$category->id] = $category->title;
        }

        return $options;
    }

    public function onRun()
    {
        $categoryId = $this->property('categoryFilter');

        $this->galleries = Gallery::with(['featured_image', 'images'])->whereHas('categories', function ($q) use ($categoryId) {
            $q->where('id', $categoryId);
        })->get();
    }
}
