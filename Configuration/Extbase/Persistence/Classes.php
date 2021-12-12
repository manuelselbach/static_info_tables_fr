<?php

declare(strict_types=1);

return [
    \SJBR\StaticInfoTables\Domain\Model\Country::class => [
        'tableName' => 'static_countries',
        'properties' => [
            'shortNameFr' => [
                'fieldName' => 'cn_short_fr',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\CountryZone::class => [
        'tableName' => 'static_country_zones',
        'properties' => [
            'nameFr' => [
                'fieldName' => 'zn_name_fr',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\Currency::class => [
        'tableName' => 'static_currencies',
        'properties' => [
            'nameFr' => [
                'fieldName' => 'cu_name_fr',
            ],
            'subdivisionNameFr' => [
                'fieldName' => 'cu_sub_name_fr',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\Language::class => [
        'tableName' => 'static_languages',
        'properties' => [
            'nameFr' => [
                'fieldName' => 'lg_name_fr',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\Territory::class => [
        'tableName' => 'static_territories',
        'properties' => [
            'nameFr' => [
                'fieldName' => 'tr_name_fr',
            ],
        ],
    ],
];
