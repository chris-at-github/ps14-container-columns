<?php

// second container
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer((
	new \B13\Container\Tca\ContainerConfiguration(
		'container-2-column', // CType
		'LLL:EXT:container_columns/Resources/Private/Language/locallang_tca.xlf:tx_container_columns.title', // label
		'LLL:EXT:container_columns/Resources/Private/Language/locallang_tca.xlf:tx_container_columns.description', // description
		[
			[
				['name' => 'LLL:EXT:container_columns/Resources/Private/Language/locallang_tca.xlf:tx_container_columns.column.1', 'colPos' => 4001],
				['name' => 'LLL:EXT:container_columns/Resources/Private/Language/locallang_tca.xlf:tx_container_columns.column.2', 'colPos' => 4002]
			]
		]
	)
));
