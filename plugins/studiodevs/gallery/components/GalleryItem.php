<?php

namespace StudioDevs\Gallery\Components;

use Cms\Classes\ComponentBase;
use StudioDevs\Gallery\Models\Gallery;

/**
 * Gallery Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class GalleryItem extends ComponentBase
{
    public $gallery;

    public function componentDetails()
    {
        return [
            'name' => 'Gallery Component',
            'description' => 'Pojedyncza galeria'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => 'studiodevs.gallery::lang.components.gallery.properties.gallery_slug',
                'description' => 'studiodevs.gallery::lang.components.gallery.properties.gallery_slug_desc',
                'default'     => '{{ :slug }}',
                'type'        => 'string',
            ],
            'category' => [
                'title'       => 'studiodevs.gallery::lang.components.gallery.properties.gallery_category',
                'description' => 'studiodevs.gallery::lang.components.gallery.properties.gallery_category_desc',
                'default'     => '{{ :category }}',
                'type'        => 'string',
            ],
        ];
    }

    public function onRun()
    {
        $this->gallery = Gallery::where('slug', $this->property('slug'))->first();
    }

    public function getCategoryUrl(string $categorySlug)
    {
        $slug = $categorySlug;
    }
}
