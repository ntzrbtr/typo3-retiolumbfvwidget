<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

// Add static TypoScript.
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'BFV widget');

// Register plugin and related FlexForm.
Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Bfvwidget',
	'BFV widget'
);
t3lib_extMgm::addPiFlexFormValue($_EXTKEY . '_Bfvwidget', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_widget.xml');
?>