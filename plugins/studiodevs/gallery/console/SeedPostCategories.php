<?php

namespace StudioDevs\Gallery\Console;

use Illuminate\Console\Command;
use RainLab\Blog\Models\Category;

class SeedPostCategories extends Command
{
    protected $name = 'seed:post:categories';
    protected $description = 'Seed post categories';

    public function handle()
    {
        $this->seedCategories();
    }

    public function seedCategories()
    {
        $categories = [
            'OREW' => 'orew',
            'NPS' => 'nps',
            'PSONI' => 'psoni',
            'PSONI przetargi' => 'psoni-przetargi',
            'PU' => 'projekt-unijny',
            'PU osoby' => 'pu-osoby',
            'PU rodzice' => 'pu-rodzice',
            'PU przetargi' => 'pu-przetargi',
            'PU rynek' => 'pu-rynek',
            'MT' => 'mtr',
            'KT' => 'kta',
            'WSM' => 'wsm',
            'ORD' => 'ord',
            'SDS' => 'sds'
        ];

        foreach ($categories as $name => $slug) {
            $category = new Category();
            $category->name = $name;
            $category->slug = $slug;
            $category->save();
        }
    }

}
