<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

// Add static TypoScript.
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'BFV widget');

// Register plugin.
Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Bfvwidget',
	'BFV widget'
);
?>