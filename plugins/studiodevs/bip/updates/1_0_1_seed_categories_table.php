<?php

namespace StudioDevs\Bip\Updates\Seeds;

use Seeder;
use StudioDevs\Bip\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categoriesFilePath = plugins_path('studiodevs/bip/updates/categories.json');
        $categoriesData = json_decode(file_get_contents($categoriesFilePath), true);

        foreach ($categoriesData as $slug => $categoryData) {
            $category = new Category();
            $category->slug = $slug;
            $category->name = $categoryData['name'];
            $category->page_code = $categoryData['page_code'];
            $category->menu_order = $categoryData['menu_order'];
            $category->description = $categoryData['description'];
            $category->save();
        }
    }
}
