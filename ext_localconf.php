<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

// Define plugin.
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	$_EXTKEY,
	'Bfvwidget',
	array(
		'Widget' => 'index',
	),
	array(
	)
);
