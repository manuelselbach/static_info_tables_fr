<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Static Info Tables (fr)',
    'description' => 'French (fr) language pack for the Static Info Tables providing localized names for countries, currencies and so on.',
    'category' => 'misc',
    'version' => '14.3.0',
    'state' => 'stable',
    'clearcacheonload' => true,
    'author' => 'Manuel Selbach',
    'author_email' => 'manuel_selbach@yahoo.de',
    'constraints' => [
        'depends' => [
            'typo3' => '14.3.0-14.3.99',
            'static_info_tables' => '14.3.0-14.3.99',
            'php' => '8.2.0-8.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
