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

	const KEY = 'retiolumbfvwidget';

	/**
	 * Processing the wizard items array.
	 *
	 * @param array $wizardItems The wizard items
	 * @return array
	 */
	public function proc($wizardItems) {
		// Load language labels.
		$locallang = $this->includeLocalLang();

		// Add icons.
		$wizardItems['plugins_tx_' . self::KEY] = array(
			'icon'		=> t3lib_extMgm::extRelPath(self::KEY) . 'Resources/Public/Icons/bfvwidget.gif',
			'title'		=> $GLOBALS['LANG']->getLLL('bfvwidget_title', $locallang),
			'description'	=> $GLOBALS['LANG']->getLLL('bfvwidget_description', $locallang),
			'params'	=> '&defVals[tt_content][CType]=list&defVals[tt_content][list_type]=' . self::KEY . '_bfvwidget'
		);

		// Return modified array.
		return $wizardItems;
	}

	/**
	 * Reads the [extDir]/locallang_be.xml and returns the $LOCAL_LANG array found in that file.
	 *
	 * @return
	 */
	protected function includeLocalLang() {
		$file = t3lib_extMgm::extPath(self::KEY) . 'Resources/Private/Language/locallang_be.xml';
		return t3lib_div::readLLXMLfile($file, $GLOBALS['LANG']->lang);
	}
}


if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/news/Resources/Private/Php/class.retiolumbfvwidget_wizicon.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/news/Resources/Private/Php/class.retiolumbfvwidget_wizicon.php']);
}
?>