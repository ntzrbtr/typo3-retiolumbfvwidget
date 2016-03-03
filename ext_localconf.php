<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$boot = function($_EXTKEY) {
	// Define plugin.
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
		'Retiolum.' . $_EXTKEY,
		'Bfvwidget',
		array(
			'Widget' => 'index',
		),
		array(
		)
	);
};
$boot($_EXTKEY);
unset($boot);
