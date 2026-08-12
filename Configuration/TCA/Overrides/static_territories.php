<?php

declare(strict_types=1);

use Mselbach\StaticInfoTablesFr\Provider\TcaProvider;

(static function (string $dataSetName): void {
    $additionalFields = [
        'tr_name_en' => 'tr_name_fr',
    ];

    TcaProvider::generateAndRegisterTca(
        $additionalFields,
        $dataSetName
    );
})('static_territories');
