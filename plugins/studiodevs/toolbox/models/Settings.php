<?php 

namespace Studiodevs\Toolbox\Models;

use Model;
use Cms\Classes\Page;

/**
 * Settings Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'toolbox_settings';

    public $settingsFields = 'fields.yaml';

    public function getCategoryPageOptions() :array 
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }
    
    public static function getPostCategoriesPages()
    {
        $categoriesPages = self::instance()->post_category_pages;
        
        $categoriesPagesArray = [];
        foreach ($categoriesPages as $page) {
            $categoriesPagesArray[$page['category_slug']] = $page['category_page'];
        }

        return $categoriesPagesArray;
    }

    public static function getCategoryPage(string $slug): string 
    {
        $categoriesPages = self::getPostCategoriesPages();

        return $categoriesPages[$slug] ?? '';
    }

}
