<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

// Register plugin.
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Retiolum.' . $_EXTKEY,
	'Bfvwidget',
	'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_be.xlf:bfvwidget_title'
);

// Register FlexForm for plugin.
$pluginSignature = strtolower($_EXTKEY . '_Bfvwidget');
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_widget.xml');

// Define icon for the wizard.
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:retiolumbfvwidget/Configuration/TSconfig/PageTS.txt">');
