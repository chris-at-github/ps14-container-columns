<?php

// second container
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer((
	new \B13\Container\Tca\ContainerConfiguration(
		'ps14_container_2_column', // CType
		'LLL:EXT:ps14_container_columns/Resources/Private/Language/locallang_tca.xlf:container-two-column.title', // label
		'LLL:EXT:ps14_container_columns/Resources/Private/Language/locallang_tca.xlf:container-two-column.description', // description
		[
			[
				['name' => 'LLL:EXT:ps14_container_columns/Resources/Private/Language/locallang_tca.xlf:container-columns.column.1', 'colPos' => 4001],
				['name' => 'LLL:EXT:ps14_container_columns/Resources/Private/Language/locallang_tca.xlf:container-columns.column.2', 'colPos' => 4002]
			]
		]
	)
));

// Flexform
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
	'*',
	'FILE:EXT:ps14_container_columns/Configuration/FlexForms/ContainerColumns.xml',
	'ps14_container_2_column'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', 'pi_flexform', 'ps14_container_2_column', 'after:header');