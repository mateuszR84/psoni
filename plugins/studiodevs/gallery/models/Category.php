<?php namespace StudioDevs\Gallery\Models;

use Model;

/**
 * Category Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'studiodevs_gallery_categories';

    /**
     * @var array rules for validation
     */
    public $rules = [
        'title' => 'required',
    ];

    public $belongsToMany = [
        'galleries' => ['Studiodevs\Gallery\Models\Gallery',
            'table' => 'studiodevs_gallery_galleries_categories',
            'order' => 'published_at desc',
            'scope' => 'isPublished'
        ],
        'galleries_count' => ['Studiodevs\Gallery\Models\Gallery',
            'table' => 'studiodevs_gallery_galleries_categories',
            'count' => true
        ]
    ];
}
