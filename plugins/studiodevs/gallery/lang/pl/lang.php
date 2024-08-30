<?php

return [
    'menu_label' => 'Galeria',
    'models' => [
        'gallery' => [
            'published_validation' => 'Ustaw datę publikacji galerii',
        ]
    ],
    'gallery' => [
        'galleries' => 'Lista galerii',
        'categories' => 'Kategorie',
        'title' => 'Nazwa kategorii',
        'slug' => 'Slug',
        'description' => 'Dodaj krótki opis',
    ],
    'galleries' => [
        'new_gallery' => 'Nowa galeria',
    ],
    'components' => [
        'galleries' => [
            'properties' => [
                'category_filter' => 'Kategoria',
                'category_filter_desc' => 'Wybierz kategorię, po której filtrować galerie',
                'galleries_per_page' => 'Galerii na stronę',
                'no_galleries_message' => 'Komunikat o braku galerii',
                'no_galleries_message_desc' => 'Wpisz co wyświetlić, gdy w danej kategorii nie ma opublikowanych galerii',
                'no_galleries_message_default' => 'Brak galerii',
                'is_published' => 'Tylko opublikowane',
                'is_published_desc' => 'Wybierz, czy pokazać tylko opublikowane galerie',
                'sort_by' => 'Sortuj po dacie:',
                'sort_by_desc' => 'Wybierz po jakiej dacie sortować galerie',
                'published_at' => 'Publikacji',
                'created_at' => 'Utworzenia',
                'published_at_desc' => 'Publikacji (malejąco)',
                'published_at_asc' => 'Publikacji (rosnąco)',
                'created_at_desc' => 'Utworzenia (malejąco)',
                'created_at_asc' => 'Utworzenia (rosnąco)',
                'gallery_page' => 'Strona galerii',
                'gallery_page_desc' => 'Podaj URL strony, na której wyświetlana jest galeria',
            ]
            ],
        'gallery' => [
            'properties' => [
                'gallery_slug' => 'Alias galerii',
                'gallery_slug_desc' => 'Wyszukuje post po nazwie aliasu',
                'gallery_category' => 'Alias kategorii galerii',
                'gallery_category_desc' => 'Kategoria galerii',
            ]
        ]
    ]
];