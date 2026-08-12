<?php

declare(strict_types=1);

use Mselbach\StaticInfoTablesFr\Provider\TcaProvider;

(static function (string $dataSetName): void {
    $additionalFields = [
        'zn_name_en' => 'zn_name_fr',
    ];

    TcaProvider::generateAndRegisterTca(
        $additionalFields,
        $dataSetName
    );
})('static_country_zones');
