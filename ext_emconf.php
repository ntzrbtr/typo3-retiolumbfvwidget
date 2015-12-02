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
	'state' => 'stable',
	'uploadfolder' => FALSE,
	'clearCacheOnLoad' => FALSE,
	'version' => '1.1.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2.0-7.6.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);
