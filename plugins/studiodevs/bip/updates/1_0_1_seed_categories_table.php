<?php

namespace StudioDevs\Bip\Updates\Seeds;

use Seeder;
use StudioDevs\Bip\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            'Status prawny/forma prawna',
            'Organizacja',
            'Przedmiot działalności',
            'Organy i osoby sprawujące funkcje i ich kompetencje',
            'Struktura organizacyjna i własnościowa',
            'Majątek',
            'Tryb działania',
            'Sposoby przyjmowania i załatwiania spraw',
            'Informacje o prowadzonych rejestrach, ewidencjach i archiwach oraz o sposobach i zasadach udostępniania danych w nich zawartych',
            'Nabór kandydatów do zatrudnienia na wolne stanowiska',
        ];

        foreach ($categories as $name) {
            Category::updateOrCreate(
                ['slug' => Str::slug($name)],
                [
                    'name' => $name,
                    'page_code' => 'orew',
                ]
            );
        }
    }
}
