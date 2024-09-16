<?php

namespace StudioDevs\Gallery\Classes;

use RainLab\Blog\Models\Category;

class TwigHelpers {
    
    public function getPageFromCategory(string $categorySlug) : string 
    {
        $pagesNamesToReturn = [
            'orew' => 'orew/orew',
            'nps' => 'nps/nps',
            'psoni' => 'psoni/psoni',
            'psoni-przetargi' => 'psoni/przetargi',
            'projekt-unijny' => 'pu/pu',
            'pu-osoby' => 'pu/osoby',
            'pu-rodzice' => 'pu/rodzice',
            'pu-przetargi' => 'pu/przetargi',
            'pu-rynek' => 'pu/rynek',
            'mtr' => 'mt/mt',
            'kt' => 'kt/kt',
            'wsm' => 'wsm/wsm',
            'ord' => 'ord/ord',
            'sds' => 'sds/sds'
        ];

        return $pagesNamesToReturn[$categorySlug];
    } 

    public function getPageNameFromCategory(string $categorySlug) : string 
    {
        $pagesTitles = [
            'psoni' => 'psoni/psoni',
            'psoni-przetargi' => 'psoni/przetargi',
            'projekt-unijny' => 'pu/pu',
            'pu-osoby' => 'pu/osoby',
            'pu-rodzice' => 'pu/rodzice',
            'pu-przetargi' => 'pu/przetargi',
            'pu-rynek' => 'pu/rynek',
        ];

        $pageName = 'Aktualności';
        if (in_array($categorySlug, $pagesTitles)) {
            $pageName = $pagesTitles[$categorySlug];
        }

        return $pageName;
    } 
}