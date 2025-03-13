<?php 

namespace Studiodevs\Gallery\Components;

use StudioDevs\Gallery\Models\Gallery;
use StudioDevs\Gallery\Components\GalleryItem;

/**
 * GallerySnippet Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class GallerySnippet extends GalleryItem
{
    public $galleryItem;

    public function componentDetails()
    {
        return [
            'name' => 'GallerySnippet',
            'description' => 'Osadź wybraną galerię'
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
            'displayMode' => [
                'title'       => 'studiodevs.gallery::lang.components.gallery.properties.display_mode',
                'description' => 'studiodevs.gallery::lang.components.gallery.properties.display_mode_desc',
                'type'        => 'dropdown',
            ],
        ];
    }

    public function getDisplayModeOptions() :array
    {
        return [
            'galleria' => 'Slider',
            'photoswipe' => 'Pojedyncze zdjęcia'
        ];
    }

    public function onRun()
    {
        if ($this->property('displayMode') === 'galleria') {
            $this->addJs('assets/js/galleria.js');
        }

        if ($this->property('displayMode') === 'photoswipe') {
            $this->addJs('assets/js/photoswipe.js');
        }

        $galleryItem = Gallery::where('slug', $this->property('slug'))->first();
        $this->galleryItem = $galleryItem;
    }

    public function onRender()
    {
        if ($this->property('displayMode') === 'galleria') {
            return $this->renderPartial('@galleria', ['__SELF__' => $this]);
        }

        if ($this->property('displayMode') === 'photoswipe') {
            return $this->renderPartial('@photoswipe', ['__SELF__' => $this]);
        }
    }

}
