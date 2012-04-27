<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

// Define plugin.
Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Bfvwidget',
	array(
		'Widget' => 'index',
	),
	array(
	)
);
?>