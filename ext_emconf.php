<?php

########################################################################
# Extension Manager/Repository config file for ext "retiolumbfvwidget".
#
# Auto generated 27-07-2012 11:08
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'BFV widget',
	'description' => 'This extension provides a simple plugin to display the BFV (Bayerischer Fußball-Verband) widget; this way you can show the latest results, current table and upcoming matches of your football team from Bavaria.',
	'category' => 'plugin',
	'author' => 'Thomas Off',
	'author_email' => 'retiolum@googlemail.com',
	'author_company' => '',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'extbase' => '1.3',
			'fluid' => '1.3',
			'typo3' => '4.5-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:17:{s:9:"README.md";s:4:"32cd";s:12:"ext_icon.gif";s:4:"9daf";s:17:"ext_localconf.php";s:4:"111b";s:14:"ext_tables.php";s:4:"b91d";s:39:"Classes/Controller/WidgetController.php";s:4:"a385";s:43:"Configuration/FlexForms/flexform_widget.xml";s:4:"6667";s:40:"Resources/Private/Language/locallang.xml";s:4:"1980";s:43:"Resources/Private/Language/locallang_be.xml";s:4:"5128";s:56:"Resources/Private/Language/locallang_flexform_widget.xml";s:4:"3a2d";s:38:"Resources/Private/Layouts/default.html";s:4:"4e28";s:57:"Resources/Private/PHP/class.retiolumbfvwidget_wizicon.php";s:4:"b4a0";s:45:"Resources/Private/Templates/Widget/index.html";s:4:"5540";s:36:"Resources/Public/Icons/bfvwidget.gif";s:4:"3091";s:14:"doc/manual.sxw";s:4:"d9fc";s:28:"nbproject/project.properties";s:4:"fd2d";s:21:"nbproject/project.xml";s:4:"fff7";s:36:"nbproject/private/private.properties";s:4:"e5f3";}',
);

?>