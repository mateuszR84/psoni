<?php

namespace StudioDevs\Bip\Models;

use Model;
use BackendAuth;
use StudioDevs\Bip\Models\Category;
use StudioDevs\Bip\Models\Settings;
use Backend\Models\User as BackendUser;

/**
 * Article Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Article extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'studiodevs_bip_articles';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $belongsTo = [
        'user' => BackendUser::class
    ];

    public $belongsToMany = [
        'categories' => [
            Category::class,
            'table' => 'studiodevs_bip_articles_categories',
            'order' => 'name'
        ]
    ];

    public $attachMany = [
        'featured_images' => [\System\Models\File::class, 'order' => 'sort_order'],
        'content_images'  => \System\Models\File::class
    ];
    
    /**
     * getUserOptions
     */
    public function getUserOptions()
    {
        $options = [];

        foreach (BackendUser::all() as $user) {
            $options[$user->id] = $user->fullname . ' ('.$user->login.')';
        }

        return $options;
    }

    public static function getPageOptions()
    {
        $bipPages = Settings::getBipPages();   
        return $bipPages;
    }

    public function beforeValidate()
    {
        if (empty($this->user)) {
            $user = BackendAuth::getUser();
            if (!is_null($user)) {
                $this->user = $user->id;
            }
        }

        if (empty($this->page)) {
            $this->page = 'psoni';
        }
    }

    public function scopeGetForPage($query, $page)
    {
        return $query->where('page', $page);
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }
}
