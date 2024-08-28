<?php

return [
    'menu_label' => 'Galeria',
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