<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$boot = function($_EXTKEY) {
	// Register plugin and add Flexform (legacy).
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
		'Retiolum.' . $_EXTKEY,
		'bfvwidget',
		'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_be.xlf:bfvwidget_title'
	);
	$pluginSignature = strtolower($_EXTKEY . '_bfvwidget');
	$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_legacy.xml');

	// Define icons for the content wizard.
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/TSconfig/PageTS.txt">');

	// Add static TypoScript template.
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'EXT:' . $_EXTKEY . '/Configuration/TypoScript/', $_EXTKEY);
};
$boot($_EXTKEY);
unset($boot);
