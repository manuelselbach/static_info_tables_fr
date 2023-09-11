<?php

declare(strict_types=1);

(static function (string $dataSetName) {
    $additionalFields = [
        'cn_short_en' => 'cn_short_fr'
    ];

    \Mselbach\StaticInfoTablesFr\Provider\TcaProvider::generateAndRegisterTca(
        $additionalFields,
        $dataSetName
    );
})('static_countries');
