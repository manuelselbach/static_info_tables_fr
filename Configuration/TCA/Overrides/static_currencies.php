<?php

declare(strict_types=1);

use Mselbach\StaticInfoTablesFr\Provider\TcaProvider;

(static function (string $dataSetName): void {
    $additionalFields = [
        'cu_name_en' => 'cu_name_fr',
        'cu_sub_name_en' => 'cu_sub_name_fr',
    ];

    TcaProvider::generateAndRegisterTca(
        $additionalFields,
        $dataSetName
    );
})('static_currencies');
