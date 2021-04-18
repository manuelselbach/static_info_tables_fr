<?php

declare(strict_types=1);

namespace Mselbach\StaticInfoTablesFr\Provider;

use Mselbach\StaticInfoTablesFr\Extension;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2017 Manuel Selbach <manuel_selbach@yahoo.de>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  A copy is found in the text file GPL.txt and important notices to the license
 *  from the author is found in LICENSE.txt distributed with these scripts.
 *
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
class TcaProvider
{
    /**
     * @var string Path to language file of labels in the backend
     */
    protected static $LL = 'LLL:EXT:%s/Resources/Private/Language/locallang_db.xlf:%s_item.%s';

    /**
     * @param array  $additionalFields
     * @param string $dataSetName
     */
    public static function generateAndRegisterTca(array $additionalFields, string $dataSetName): void
    {
        foreach ($additionalFields as $sourceField => $destField) {
            $additionalColumns = [];
            $additionalColumns[$destField] = $GLOBALS['TCA'][$dataSetName]['columns'][$sourceField];
            $additionalColumns[$destField]['label'] = sprintf(
                static::$LL,
                Extension::EXTENSION_KEY,
                $dataSetName,
                $destField
            );
            ExtensionManagementUtility::addTCAcolumns($dataSetName, $additionalColumns);
            ExtensionManagementUtility::addToAllTCAtypes(
                $dataSetName,
                $destField,
                '',
                'after:' . $sourceField
            );
            // Add as search field
            $GLOBALS['TCA'][$dataSetName]['ctrl']['searchFields'] .= ',' . $destField;
        }
    }
}
