<?php

namespace Retiolum\Retiolumbfvwidget\Controller;

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

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Controller for displaying the widget.
 */
class WidgetController extends ActionController {

	/**
	 * Display the BFV widget.
	 */
	public function indexAction() {
		// Get extension key for later use.
		$extKey = $this->request->getControllerExtensionKey();

		// Create an data object and encode it as JSON.
		$widgetId = uniqid($extKey);
		$this->view->assign('widgetId', $widgetId);
		$widgetData = $this->settings;
		$widgetData['id'] = $widgetId;
		$this->view->assign('widgetData', json_encode($widgetData, JSON_FORCE_OBJECT));

		// Add required JavaScript.
		/** @var \TYPO3\CMS\Core\Page\PageRenderer $pageRenderer */
		$pageRenderer = $GLOBALS['TSFE']->getPageRenderer();
		$pageRenderer->addJsFooterFile('http://ergebnisse.bfv.de/javascript/widgets/bfvWidgetFunctions.js');
		$extRelPath = ExtensionManagementUtility::siteRelPath('retiolumbfvwidget');
		$pageRenderer->addJsFooterFile($extRelPath . 'Resources/Public/Scripts/retiolumbfvwidget_loader.js');
	}

}
