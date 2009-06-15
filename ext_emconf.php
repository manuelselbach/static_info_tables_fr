<?php

########################################################################
# Extension Manager/Repository config file for ext: "static_info_tables_fr"
#
# Auto generated 10-06-2009 14:10
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Static Info Tables (fr)',
	'description' => '(fr) language pack for the Static Info Tables providing localized names for countries, currencies and so on.',
	'category' => 'misc',
	'shy' => 0,
	'version' => '2.0.1',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => 'static_countries,static_languages,static_currencies,static_territories',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'RenÃÂÃÂ¯ÃÂÃÂ¿ÃÂÃÂ½ Fritz',
	'author_email' => 'r.fritz@colorcube.de',
	'author_company' => 'Colorcube - digital media lab, www.colorcube.de',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'static_info_tables' => '2.0.0-',
			'php' => '4.1.0-0.0.0',
			'typo3' => '4.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:9:{s:9:"ChangeLog";s:4:"2687";s:20:"class.ext_update.php";s:4:"8c78";s:21:"ext_conf_template.txt";s:4:"7de5";s:12:"ext_icon.gif";s:4:"639f";s:17:"ext_localconf.php";s:4:"48db";s:14:"ext_tables.php";s:4:"2c0d";s:14:"ext_tables.sql";s:4:"c1d1";s:28:"ext_tables_static_update.sql";s:4:"c4fe";s:16:"locallang_db.xml";s:4:"213e";}',
);

?>