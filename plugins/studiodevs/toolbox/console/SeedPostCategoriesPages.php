<?php

namespace StudioDevs\Toolbox\Console;

use Illuminate\Console\Command;
use Studiodevs\Toolbox\Models\Settings;

class SeedPostCategoriesPages extends Command
{
    protected $name = 'seed:post:categories:pages';
    protected $description = 'Seed post categories pages';

    public function handle()
    {
        $this->seedCategoriesPages();
    }

    public function seedCategoriesPages()
    {
        $settings = \Db::table('system_settings')->where('item', 'toolbox_settings')->first();
        if (!$settings) {
            Settings::set('post_category_pages', [
                ['category_slug' => 'orew', 'category_page' => 'orew/orew'],
                ['category_slug' => 'nps', 'category_page' => 'nps/nps'],
                ['category_slug' => 'sds', 'category_page' => 'sds/sds'],
                ['category_slug' => 'ord', 'category_page' => 'ord/ord'],
                ['category_slug' => 'wsm', 'category_page' => 'wsm/wsm'],
                ['category_slug' => 'kta', 'category_page' => 'kt/kt'],
                ['category_slug' => 'mtr', 'category_page' => 'mt/mt'],
                ['category_slug' => 'pu-rynek', 'category_page' => 'pu/rynek'],
                ['category_slug' => 'pu-przetargi', 'category_page' => 'pu/przetargi'],
                ['category_slug' => 'pu-rodzice', 'category_page' => 'pu/rodzice'],
                ['category_slug' => 'pu-osoby', 'category_page' => 'pu/osoby'],
                ['category_slug' => 'projekt-unijny', 'category_page' => 'pu/pu'],
                ['category_slug' => 'psoni', 'category_page' => 'psoni/psoni'],
                ['category_slug' => 'psoni-przetargi', 'category_page' => 'psoni/przetargi'],
            ]);
        }
    }
}
