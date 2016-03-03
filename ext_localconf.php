<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$boot = function($_EXTKEY) {
	// Define plugin (legacy).
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
		'Retiolum.' . $_EXTKEY,
		'bfvwidget',
		array(
			'Widget' => 'legacy',
		),
		array(
		)
	);
};
$boot($_EXTKEY);
unset($boot);
