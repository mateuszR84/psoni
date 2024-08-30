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
        $psoni = new Category();
        $psoni->title = 'OREW';
        $psoni->slug = 'orew';
        $psoni->save();
        
        $psoniPlacowka = new Category();
        $psoniPlacowka->title = 'NPS';
        $psoniPlacowka->slug = 'nps';
        $psoniPlacowka->save();

        $orew = new Category();
        $orew->title = 'PSONI przetargi';
        $orew->slug = 'psoni-przetargi';
        $orew->save();

        $nps = new Category();
        $nps->title = 'PSONI';
        $nps->slug = 'psoni';
        $nps->save();

        $sds = new Category();
        $sds->title = 'PU';
        $sds->slug = 'projekt-unijny';
        $sds->save();

        $mt = new Category();
        $mt->title = 'PU osoby';
        $mt->slug = 'pu-osoby';
        $mt->save();
        
        $kt = new Category();
        $kt->title = 'PU rodzice';
        $kt->slug = 'pu-rodzice';
        $kt->save();

        $wsm = new Category();
        $wsm->title = 'MT';
        $wsm->slug = 'mieszkanie-treningowe';
        $wsm->save();

        $ord = new Category();
        $ord->title = 'KT';
        $ord->slug = 'klub';
        $ord->save();

        $wsm = new Category();
        $wsm->title = 'WSM';
        $wsm->slug = 'wsm';
        $wsm->save();

        $ord = new Category();
        $ord->title = 'ORD';
        $ord->slug = 'ord';
        $ord->save();
        
        $przetargi = new Category();
        $przetargi->title = 'PU przetargi';
        $przetargi->slug = 'pu-przetargi';
        $przetargi->save();

        $rynek = new Category();
        $rynek->title = 'PU rynek';
        $rynek->slug = 'pu-rynek';
        $rynek->save();

        $sds1 = new Category();
        $sds1->title = 'SDS';
        $sds1->slug = 'sds';
        $sds1->save();
    }

}
