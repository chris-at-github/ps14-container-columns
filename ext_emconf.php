<?php


$EM_CONF[$_EXTKEY] = [
	'title' => 'Container Columns',
	'description' => 'Columns for two, three, four columns',
	'category' => 'misc',
	'author' => 'Christian Pschorr',
	'author_email' => 'pschorr.christian@gmail.com',
	'author_company' => '',
	'state' => 'stable',
	'uploadfolder' => false,
	'createDirs' => '',
	'clearCacheOnLoad' => true,
	'version' => '1.0.0',
	'constraints' => [
		'depends' => [
			'typo3' => '9.5.17-10.4.99',
			'xo' => '1.0.0-1.99.99',
			'container' => '1.4.2-2.0.99',
		],
		'conflicts' => [],
		'suggests' => []
	]
];