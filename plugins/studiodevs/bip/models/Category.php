<?php namespace StudioDevs\Bip\Models;

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
    public $table = 'studiodevs_bip_categories';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $belongsToMany = [
        'articles' => ['StudioDevs\Bip\Models\Article',
            'table' => 'studiodevs_bip_articles_categories',
            'order' => 'published_at desc',
        ],
        'articles_count' => ['Studiodevs\Bip\Models\Article',
            'table' => 'studiodevs_bip_articles_categories',
            'count' => true
        ]
    ];
}
