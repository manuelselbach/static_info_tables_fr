<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "static_info_tables_fr".
 *
 * Auto generated 19-04-2013 09:11
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Static Info Tables (fr)',
	'description' => 'French language pack for the Static Info Tables providing localized names for countries, currencies and so on.',
	'category' => 'misc',
	'shy' => 0,
	'version' => '2.1.0',
	'dependencies' => 'static_info_tables',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => 'static_countries,static_languages,static_currencies,static_territories,static_country_zones',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Francois Suter, Franz Holzinger, Rene Fritz',
	'author_email' => 'typo3@cobweb.ch',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'static_info_tables' => '2.0.0-0.0.0',
			'typo3' => '4.5.0-6.1.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:9:{s:9:"ChangeLog";s:4:"ee7d";s:20:"class.ext_update.php";s:4:"ac43";s:21:"ext_conf_template.txt";s:4:"7de5";s:12:"ext_icon.gif";s:4:"639f";s:17:"ext_localconf.php";s:4:"48db";s:14:"ext_tables.php";s:4:"15d9";s:14:"ext_tables.sql";s:4:"6b82";s:28:"ext_tables_static_update.sql";s:4:"5fcf";s:16:"locallang_db.xml";s:4:"213e";}',
	'suggests' => array(
	),
);

?>