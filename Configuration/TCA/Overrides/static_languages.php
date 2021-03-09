<?php

declare(strict_types=1);

defined('TYPO3_MODE') || die();

(static function (string $dataSetName) {
    $additionalFields = [
        'lg_name_en' => 'lg_name_fr'
    ];

    \Mselbach\StaticInfoTablesFr\Provider\TcaProvider::generateAndRegisterTca(
        $additionalFields,
        $dataSetName
    );
})('static_languages');
