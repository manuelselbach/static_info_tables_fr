<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Static Info Tables (fr)',
    'description' => 'French (fr) language pack for the Static Info Tables providing localized names for countries, currencies and so on.',
    'category' => 'misc',
    'version' => '12.4.0',
    'state' => 'stable',
    'uploadfolder' => true,
    'createDirs' => '',
    'clearcacheonload' => true,
    'author' => 'Manuel Selbach',
    'author_email' => 'manuel_selbach@yahoo.de',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'static_info_tables' => '12.4.0-12.4.99',
            'php' => '8.1.0-0.0.0',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
