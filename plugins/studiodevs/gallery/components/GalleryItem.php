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

    public $images;

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
        $gallery = Gallery::where('slug', $this->property('slug'))->first();
        $this->gallery = $gallery;

        $this->images = $gallery->images->sortBy('sort_order');
    }

    public function getCategoryUrl(string $categorySlug = null)
    {
        if (!$categorySlug) {
            return url('/');
        }

        $redirectsArray = [
            'psoni-galeria' => '/psoni/galeria',
            'orew-galeria' => '/orew/galeria',
            'nps-galeria' => '/nps/galeria',
            'sds-galeria' => '/sds/galeria',
            'kt-galeria' => '/kt/galeria',
            'mt-galeria' => '/mt/galeria',
            'wsm-galeria' => '/wsm/galeria',
            'ord-galeria' => '/ord/galeria',
            'pu-galeria' => '/pu/galeria',
	    'pu-wsm-galeria' => '/pu/wsm/galeria',
        ];

        return url($redirectsArray[$categorySlug]);
    }
}
