<?php namespace StudioDevs\Gallery\Models;

use Lang;
use Model;
use ValidationException;
use StudioDevs\Gallery\Models\Category;

/**
 * Gallery Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Gallery extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'studiodevs_gallery_galleries';

    /**
     * @var array rules for validation
     */
    public $rules = [
        'title' => 'required',
        'images' => 'required',
    ];

    /**
     * The attributes that should be mutated to dates.
     * @var array
     */
    protected $dates = ['published_at'];

    public $belongsToMany = [
        'categories' => [
            Category::class,
            'table' => 'studiodevs_gallery_galleries_categories',
            'order' => 'title'
        ]
    ];

    public $attachOne = [
        'featured_image' => \System\Models\File::class,
    ];

    public $attachMany = [
        'images' => \System\Models\File::class,
    ];

    public function afterValidate()
    {
        if ($this->published && !$this->published_at) {
            throw new ValidationException([
               'published_at' => Lang::get('studiodevs.gallery::lang.models.gallery.published_validation')
            ]);
        }
    }
}
