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
 * Controller for displaying the widget.
 *
 * @package retiolumbfvwidget
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_Retiolumbfvwidget_Controller_WidgetController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * Display the BFV widget.
	 *
	 * @return void
	 */
	public function indexAction() {
		// Create an id based on the settings.
		$widgetId = md5(serialize($this->settings) . uniqid());
		$this->view->assign('widgetId', $widgetId);

		// Add required JavaScript.
		$pageRenderer = $GLOBALS['TSFE']->getPageRenderer();
		$pageRenderer->addJsFile('http://ergebnisse.bfv.de/javascript/widgets/bfvWidgetFunctions.js');
		$pageRenderer->addJsInlineCode('bfvwidget_' . $widgetId, $this->getJavaScript($widgetId));
	}

	/**
	 * Get the JavaScript code needed to initialize the widget.
	 *
	 * @param string $widgetId Id of widget to initialize
	 * @return string
	 */
	public function getJavaScript($widgetId) {
        $javaScriptLines = array();
		$javaScriptLines[] = "var bfvwidget_{$widgetId} = new BFVLigaWidget();";
		$javaScriptLines[] = "bfvwidget_{$widgetId}.setzeLigaNr('{$this->settings['league']}');";
		if ($this->settings['team'] !== '') {
			$javaScriptLines[] = "bfvwidget_{$widgetId}.setzeVereinNr('{$this->settings['team']}');";
		}
		$javaScriptLines[] = "bfvwidget_{$widgetId}.{$this->settings['tab']}('bfvwidget_{$widgetId}');";
		return implode("\n", $javaScriptLines);
	}

}
?>