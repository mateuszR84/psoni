<?php

namespace StudioDevs\Gallery\Console;

use Illuminate\Console\Command;
use StudioDevs\Gallery\Models\Category;

class SeedCategories extends Command
{
    protected $name = 'seed:categories';
    protected $description = 'Seed categories';

    public function handle()
    {
        $this->seedCategories();
    }

    public function seedCategories()
    {
        $psoni = new Category();
        $psoni->title = 'Psoni galeria';
        $psoni->slug = 'psoni-galeria';
        $psoni->save();
        
        $psoniPlacowka = new Category();
        $psoniPlacowka->title = 'Psoni placowka';
        $psoniPlacowka->slug = 'psoni-placowka';
        $psoniPlacowka->save();

        $orew = new Category();
        $orew->title = 'Orew galeria';
        $orew->slug = 'orew-galeria';
        $orew->save();

        $nps = new Category();
        $nps->title = 'NPS galeria';
        $nps->slug = 'nps-galeria';
        $nps->save();

        $sds = new Category();
        $sds->title = 'SDS galeria';
        $sds->slug = 'sds-galeria';
        $sds->save();

        $mt = new Category();
        $mt->title = 'MT galeria';
        $mt->slug = 'mt-galeria';
        $mt->save();
        
        $kt = new Category();
        $kt->title = 'KT galeria';
        $kt->slug = 'kt-galeria';
        $kt->save();

        $wsm = new Category();
        $wsm->title = 'WSM galeria';
        $wsm->slug = 'wsm-galeria';
        $wsm->save();

        $ord = new Category();
        $ord->title = 'ORD galeria';
        $ord->slug = 'ord-galeria';
        $ord->save();
    }

}
