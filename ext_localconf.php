<?php
defined('TYPO3_MODE') or die();

$initialize = function ($extKey) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extKey . '/Configuration/TypoScript/Extbase/setup.txt">'
    );
};
$initialize(\Mselbach\StaticInfoTablesRu\Extension::EXTENSION_KEY);
unset($initialize);
