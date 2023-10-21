<?php

declare(strict_types=1);

(static function (string $dataSetName) {
    $additionalFields = [
        'lg_name_en' => 'lg_name_fr'
    ];

    \Mselbach\StaticInfoTablesFr\Provider\TcaProvider::generateAndRegisterTca(
        $additionalFields,
        $dataSetName
    );
})('static_languages');
