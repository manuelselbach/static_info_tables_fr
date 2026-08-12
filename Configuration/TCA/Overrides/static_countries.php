<?php

declare(strict_types=1);

use Mselbach\StaticInfoTablesFr\Provider\TcaProvider;

(static function (string $dataSetName): void {
    $additionalFields = [
        'cn_short_en' => 'cn_short_fr',
    ];

    TcaProvider::generateAndRegisterTca(
        $additionalFields,
        $dataSetName
    );
})('static_countries');
