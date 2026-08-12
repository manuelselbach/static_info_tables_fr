<?php

declare(strict_types=1);

use SJBR\StaticInfoTables\Domain\Model\Country;
use SJBR\StaticInfoTables\Domain\Model\CountryZone;
use SJBR\StaticInfoTables\Domain\Model\Currency;
use SJBR\StaticInfoTables\Domain\Model\Language;
use SJBR\StaticInfoTables\Domain\Model\Territory;

return [
    Country::class => [
        'tableName' => 'static_countries',
        'properties' => [
            'shortNameFr' => [
                'fieldName' => 'cn_short_fr',
            ],
        ],
    ],
    CountryZone::class => [
        'tableName' => 'static_country_zones',
        'properties' => [
            'nameFr' => [
                'fieldName' => 'zn_name_fr',
            ],
        ],
    ],
    Currency::class => [
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
    Language::class => [
        'tableName' => 'static_languages',
        'properties' => [
            'nameFr' => [
                'fieldName' => 'lg_name_fr',
            ],
        ],
    ],
    Territory::class => [
        'tableName' => 'static_territories',
        'properties' => [
            'nameFr' => [
                'fieldName' => 'tr_name_fr',
            ],
        ],
    ],
];
