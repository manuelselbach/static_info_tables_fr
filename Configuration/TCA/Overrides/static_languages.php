<?php

declare(strict_types=1);

use Mselbach\StaticInfoTablesFr\Provider\TcaProvider;

(static function (string $dataSetName): void {
    $additionalFields = [
        'lg_name_en' => 'lg_name_fr',
    ];

    TcaProvider::generateAndRegisterTca(
        $additionalFields,
        $dataSetName
    );
})('static_languages');
