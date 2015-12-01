<?php

########################################################################
# Extension Manager/Repository config file for ext "retiolumbfvwidget".
#
# Auto generated 27-07-2012 11:09
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
	'version' => '1.1.0',
	'constraints' => array(
		'depends' => array(
			'extbase' => '6.2',
			'fluid' => '6.2',
			'typo3' => '6.2',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);
