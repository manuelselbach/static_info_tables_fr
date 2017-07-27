<?php
defined('TYPO3_MODE') or die();

$initialize = function ($dataSetName) {
    $additionalFields = [
        'cn_short_en' => 'cn_short_fr'
    ];

    \Mselbach\StaticInfoTablesFr\Provider\TcaProvider::generateAndRegisterTca(
        $additionalFields,
        $dataSetName
    );
};
$initialize('static_countries');
unset($initialize);
