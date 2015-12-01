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

// Define the plugin signature.
$pluginSignature = strtolower($_EXTKEY . '_Bfvwidget');

// Register FlexForm for plugin.
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_widget.xml');

// Define icon for the wizard.
$extRelPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
<<<EOT
mod.wizards.newContentElement.wizardItems.plugins.elements.{$pluginSignature} {
	title = LLL:EXT:retiolumbfvwidget/Resources/Private/Language/locallang_be.xlf:bfvwidget_title
	description = LLL:EXT:retiolumbfvwidget/Resources/Private/Language/locallang_be.xlf:bfvwidget_description
	icon = {$extRelPath}/Resources/Public/Icons/bfvwidget.gif
	tt_content_defValues {
		CType = list
		list_type = {$pluginSignature}
	}
}
EOT
);
