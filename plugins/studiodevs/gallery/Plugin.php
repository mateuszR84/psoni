<?php namespace StudioDevs\Gallery;

use Backend;
use System\Classes\PluginBase;
use StudioDevs\Gallery\Classes\TwigHelpers;

/**
 * Plugin Information File
 *
 * @link https://docs.octobercms.com/3.x/extend/system/plugins.html
 */
class Plugin extends PluginBase
{
    /**
     * pluginDetails about this plugin.
     */
    public function pluginDetails()
    {
        return [
            'name' => 'Gallery',
            'description' => 'Plugin do zarządzania galeriami zdjęć',
            'author' => 'StudioDevs',
            'icon' => 'icon-file-image-o'
        ];
    }

    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
        $this->registerConsoleCommand('seed.gallery.categories', \StudioDevs\Gallery\Console\SeedGalleryCategories::class);
        $this->registerConsoleCommand('seed.post.categories', \StudioDevs\Gallery\Console\SeedPostCategories::class);
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        //
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return [
            'StudioDevs\Gallery\Components\GalleryItem' => 'galleryItem',
            'StudioDevs\Gallery\Components\Galleries' => 'galleryList',
            'StudioDevs\Gallery\Components\GallerySnippet' => 'gallerySnippet',
        ];
    }
    
    public function registerPageSnippets()
    {
        return [
            'StudioDevs\Gallery\Components\GallerySnippet' => 'gallerySnippet',
        ];
    }


    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'studiodevs.gallery.some_permission' => [
                'tab' => 'Gallery',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * registerNavigation used by the backend.
     */
    public function registerNavigation()
    {
        return [
            'gallery' => [
                'label' => 'studiodevs.gallery::lang.menu_label',
                'url' => Backend::url('studiodevs/gallery/galleries'),
                'icon' => 'icon-file-image-o',
                'permissions' => ['studiodevs.gallery.*'],
                'order' => 500,

                'sideMenu' => [
                    'new_gallery' => [
                        'label'       => 'studiodevs.gallery::lang.galleries.new_gallery',
                        'icon'        => 'icon-plus',
                        'url'         => Backend::url('studiodevs/gallery/galleries/create'),
                    ],
                    'galleries' => [
                        'label'       => 'studiodevs.gallery::lang.gallery.galleries',
                        'icon'        => 'icon-picture-o',
                        'url'         => Backend::url('studiodevs/gallery/galleries'),
                    ],
                    'categories' => [
                        'label'       => 'studiodevs.gallery::lang.gallery.categories',
                        'icon'        => 'icon-filter',
                        'url'         => Backend::url('studiodevs/gallery/categories'),
                    ]
                ]
            ],
        ];
    }
    
    public function registerMarkupTags()
    {
        return [
            'functions' => [
                // 'getPageFromCategory' => [TwigHelpers::class, 'getPageFromCategory'],
                // 'parentTitle' => [TwigHelpers::class, 'getPageNameFromCategory'],
            ]
        ];
    }


}
