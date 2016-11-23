<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "nwt_imagecrop".
 *
 * Auto generated 15-07-2015 14:16
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Imagecrop for tt_content (responsive)',
	'description' => 'You can enable cropscaling in tt_content image elements with an extra checkbox. Only TypoScript - no XCLASS',
	'category' => 'fe',
	'version' => '1.0.0',
	'state' => 'stable',
	'uploadfolder' => true,
	'createDirs' => '',
	'clearcacheonload' => true,
	'author' => 'Christian Lange - networkteam',
	'author_email' => 'info@networkteam.com',
	'author_company' => 'networkteam GmbH',
	'constraints' =>
	array (
		'depends' =>
		array (
			'cms' => '',
			'typo3' => '4.0.0-7.6.99',
		),
		'conflicts' =>
		array (
			'imagecycle' => '',
		),
		'suggests' =>
		array (
		),
	),
);
