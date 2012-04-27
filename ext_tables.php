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

// Register FlexForm for plugin.
$pluginSignature = strtolower($_EXTKEY . '_Bfvwidget');
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_widget.xml');

// Define icon for the wizard.
if (TYPO3_MODE == 'BE') {
	$TBE_MODULES_EXT['xMOD_db_new_content_el']['addElClasses'][$_EXTKEY . '_wizicon'] = t3lib_extMgm::extPath($_EXTKEY) . 'Resources/Private/PHP/class.' . $_EXTKEY . '_wizicon.php';
}
?>