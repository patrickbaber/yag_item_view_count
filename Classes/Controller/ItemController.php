<?php

class Tx_YagItemViewCount_Controller_ItemController extends Tx_Yag_Controller_ItemController {

	/**
	 * Maybe there is another way to get the ip address.
	 */
	protected function _getClientIpAddress() {
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} else {
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}

	/**
	 * Increment the view count of the item and call the standard method for displaying single item.
	 *
	 * @param Tx_Yag_Domain_Model_Item $item
	 */
	public function showSingleAction(Tx_Yag_Domain_Model_Item $item = NULL) {
		// prevent failure on page with single item
		if (empty($item)) {
			parent::showSingleAction($item);
			return;
		}

		$viewCount = $item->getViewCount();
		$lastIpAddress = $item->getLastIpAddress();
		$clientIpAddress = $this->_getClientIpAddress();
		if ($lastIpAddress != $clientIpAddress) {
			$item->setViewCount($viewCount + 1);
			$item->setLastIpAddress($clientIpAddress);

			//Doesn't update the yag item.
			//$persistenceManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager');
			//$persistenceManager->persistAll();

			//These lines work like a charm
			$repo = t3lib_div::makeInstance('Tx_Yag_Domain_Repository_ItemRepository');
			$repo->update($item);
		}
		parent::showSingleAction($item);
	}
}