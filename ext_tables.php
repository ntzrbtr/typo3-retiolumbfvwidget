<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

// Register plugin.
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Bfvwidget',
	'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_be.xml:bfvwidget_title'
);

// Register FlexForm for plugin.
$pluginSignature = strtolower($_EXTKEY . '_Bfvwidget');
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_widget.xml');

// Define icon for the wizard.
if (TYPO3_MODE == 'BE') {
	$TBE_MODULES_EXT['xMOD_db_new_content_el']['addElClasses'][$_EXTKEY . '_wizicon'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Resources/Private/PHP/class.' . $_EXTKEY . '_wizicon.php';
}
