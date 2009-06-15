<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');


if (!defined ('STATIC_INFO_TABLES_EXTkey')) {
	define('STATIC_INFO_TABLES_EXTkey','static_info_tables');
}



$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][STATIC_INFO_TABLES_EXTkey]['extendingTCA'][] = $_EXTKEY;

?>