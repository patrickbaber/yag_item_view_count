<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

/**
 * This file in the Overrides folder creates the defined columns in the DB, but no fields in the TYPO3 backend are
 * visible. So I use the old ext_tables.php for extending an existing table.
 */
$tempColumns = array(
	'view_count' => array(
		'exclude' => 0,
		'label' => 'View Count (Label)',
		'config' => array(
			'type' => 'input'
		)
	),
	'last_ip_addresses' => array(
		'exclude' => 0,
		'label' => 'Last IP Addresses (Label)',
		'config' => array(
			'type' => 'input'
		)
	),
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_yag_domain_model_item', $tempColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_yag_domain_model_item', 'view_count,last_ip_addresses;;;;1-1-1');