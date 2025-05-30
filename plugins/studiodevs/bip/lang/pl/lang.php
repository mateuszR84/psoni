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
            'articles' => 'Ilość artykułów',
            'page' => 'Opublikuj na:',
            'menu_order' => 'Kolejność wyświetlania w menu',
            'menu_order_column' => 'Menu order',
        ],
        'settings' => [
            'page' => 'Wybierz strony, na których chcesz publikować',
            'sections' => 'Sekcje',
            'sections_prompt' => 'Dodaj nową sekcję',
            'sections_name' => 'Nazwa',
            'sections_slug' => 'Alias',
            'address' => 'Adres placówki',
            'editor' => 'Dane redaktora',
            'tab_redaction' => 'Dane redakcji',
            'tab_editor' => 'Dane redaktora',
            'tab_instruction' => 'Instrukcja',
            'address_name' => 'Nazwa placówki',
            'address_street' => 'Ulica',
            'address_house_no' => 'Numer budynku',
            'address_postal_code' => 'Kod pocztowy',
            'address_city' => 'Miejscowość',
            'editor_first_name' => 'Imię',
            'editor_last_name' => 'Nazwisko',
            'editor_phone_no' => 'Telefon',
            'editor_fax_no' => 'Fax',
            'editor_email' => 'Adres email',
            'instruction' => 'Instrukcja użytkowania BIP',
        ],
    ],
    'components' => [
        'bip'=> [
            'properties' => [
                'page' => 'Strona',
                'page_description' => 'Wybierz stronę, na której jest osadzony BIP',
                'group_pages' => 'Nawigacja',
                'article_page' => 'Strona artykułu',
                'article_page_description' => 'Wybierz stronę, na której wyświetlany jest pojedynczy artykuł',
                'main_page' => 'Strona główna BIP',
                'main_page_description' => 'Wybierz główną stronę BIP',
                'category_slug_title' => 'Kategoria',
                'category_page_description' => 'Alias kategorii, która ma się wyświetlać'
            ],
        ],
    ],
];