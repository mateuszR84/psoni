<?php

namespace StudioDevs\Bip\Updates;

use Carbon\Carbon;
use StudioDevs\Bip\Models\Article;
use StudioDevs\Bip\Models\Category;
use October\Rain\Database\Updates\Seeder;

class SeedAllTables extends Seeder
{

    public function run()
    {
        Article::create([
            'title' => 'Przykładowy artykuł',
            'slug' => 'przykladowy-artykul',
            'content' => 'Przykładowa treść',
            'published_at' => Carbon::now(),
            'is_published' => true
        ]);

        Category::create([
            'name' => trans('studiodevs.bip::lang.models.category.uncategorized'),
            'slug' => 'uncategorized',
        ]);
    }
}
