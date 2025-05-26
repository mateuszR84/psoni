<?php

return [
    'navigation' => [
        'bip' => [
            'label' => 'BIP',
            'articles' => 'Artykuły',
            'categories' => 'Kategorie',
        ]
    ],
    'settings' => [
        'label' => 'Biuletyn Informacji Publicznej',
        'description' => 'Ustawienia BIP'
    ],
    'models' => [
        'article' => [
            'is_published' => 'Opublikowany',
            'title' => 'Tytuł',
            'slug' => 'Alias',
            'published_at' => 'Data publikacji',
            'user' => 'Opublikowane przez',
            'empty_option' => 'Zalogowany użytkownik',
            'title_placeholder' => 'Tytuł artykułu',
            'slug_placeholder' => 'tytul-artykulu',
            'content' => 'Treść artykułu',
            'page' => 'Opublikuj na:',
            'page_empty_option' => 'Wybierz stronę',
            'categories' => 'Kategorie',
        ],
        'category' => [
            'uncategorized' => 'Bez kategorii',
            'name' => 'Nazwa',
            'name_placeholder' => 'Nowa kategoria',
            'slug' => 'Alias',
            'slug_placeholder' => 'nowa-kategoria',
            'description' => 'Opis',
            'articles' => 'Ilość artykułów'
        ],
        'settings' => [
            'page' => 'Wybierz strony, na których chcesz publikować',
            'sections' => 'Sekcje',
            'sections_prompt' => 'Dodaj nową sekcję',
            'sections_name' => 'Nazwa',
            'sections_slug' => 'Alias',
        ],
    ]
];