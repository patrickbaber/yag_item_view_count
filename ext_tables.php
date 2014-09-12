<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$tempColumns = array(
	'view_count' => array(
		'exclude' => 0,
		'label' => 'View Count',
		'config' => array(
			'type' => 'input'
		)
	),
	'last_ip_address' => array(
		'exclude' => 0,
		'label' => 'Last IP Address',
		'config' => array(
			'type' => 'input'
		)
	),
);
\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('tx_yag_domain_model_item');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_yag_domain_model_item', $tempColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_yag_domain_model_item', 'view_count,last_ip_address;;;;1-1-1');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'YAG Item View Count');