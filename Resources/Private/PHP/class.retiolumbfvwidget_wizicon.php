<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Thomas Off <retiolum@googlemail.com>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Add icons to the wizard in page module.
 *
 * @package retiolumbfvwidget
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class retiolumbfvwidget_wizicon {

	const EXTENSION_KEY = 'retiolumbfvwidget';

	/**
	 * Processing the wizard items array to add icon for our extension.
	 *
	 * @param array $wizardItems The wizard items
	 * @return array
	 */
	public function proc($wizardItems) {
		$wizardItems['plugins_tx_' . self::EXTENSION_KEY] = array(
			'icon'			=> \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath(self::EXTENSION_KEY) . 'Resources/Public/Icons/bfvwidget.gif',
			'title'			=> \TYPO3\CMS\Extbase\Utility\LocalizationUtility::translate('bfvwidget_title', self::EXTENSION_KEY),
			'description'	=> \TYPO3\CMS\Extbase\Utility\LocalizationUtility::translate('bfvwidget_description', self::EXTENSION_KEY),
			'params'		=> '&defVals[tt_content][CType]=list&defVals[tt_content][list_type]=' . self::EXTENSION_KEY . '_bfvwidget'
		);

		return $wizardItems;
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/news/Resources/Private/Php/class.retiolumbfvwidget_wizicon.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/news/Resources/Private/Php/class.retiolumbfvwidget_wizicon.php']);
}
