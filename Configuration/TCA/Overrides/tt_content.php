<?php

if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$tempColumns = [
	'tx_nwtimagecrop_cropscaling' => [
		'exclude' => 0,
		'label' => 'LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling',
		'config' => [
			'type' => 'check',
			'default' => 0,
			'items' => [
				['LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling.I.0', ''],
			]
		]
	],
	'tx_nwtimagecrop_cropscaling_ratio' => [
		'exclude' => 1,
		'label' => 'LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_ratio',
		'config' => [
			'type' => 'select',
			'renderType' => 'selectSingle',
			'default' => 0,
			'items' => [
				['LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_ratio.I.0', '0'],
				['LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_ratio.I.1', '1'],
				['LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_ratio.I.2', '16/9'],
				['LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_ratio.I.3', '4/3'],
				['LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_ratio.I.4', '9/16'],
				['LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_ratio.I.5', '3/4'],
			]
		]
	],
	'tx_nwtimagecrop_cropscaling_orient' => [
		'exclude' => 1,
		'label' => 'LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_orient',
		'config' => [
			'type' => 'select',
			'renderType' => 'selectSingle',
			'items' => [
				[
					'LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_orient.I.1',
					1,
					'EXT:nwt_imagecrop/Resources/Public/selicons/above_left.gif',
				],
				[
					'LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_orient.I.2',
					2,
					'EXT:nwt_imagecrop/Resources/Public/selicons/above_center.gif',
				],
				[
					'LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_orient.I.3',
					3,
					'EXT:nwt_imagecrop/Resources/Public/selicons/above_right.gif',
				],
				[
					'LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_orient.I.8',
					8,
					'EXT:nwt_imagecrop/Resources/Public/selicons/center_left.gif',
				],
				[
					'LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_orient.I.0',
					0,
					'EXT:nwt_imagecrop/Resources/Public/selicons/center_center.gif',
				],
				[
					'LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_orient.I.4',
					4,
					'EXT:nwt_imagecrop/Resources/Public/selicons/center_right.gif',
				],
				[
					'LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_orient.I.7',
					7,
					'EXT:nwt_imagecrop/Resources/Public/selicons/below_left.gif',
				],
				[
					'LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_orient.I.6',
					6,
					'EXT:nwt_imagecrop/Resources/Public/selicons/below_center.gif',
				],
				[
					'LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_orient.I.5',
					5,
					'EXT:nwt_imagecrop/Resources/Public/selicons/below_right.gif',
				],
			],
			'default' => 0,
			'size' => 1,
			'minitems' => 1,
			'maxitems' => 1,
		]
	],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);

if (isset($GLOBALS['TCA']['tt_content']['palettes']['image_settings'])) {
	$GLOBALS['TCA']['tt_content']['palettes']['image_settings']['showitem'] = str_replace(', imageborder', ', tx_nwtimagecrop_cropscaling, tx_nwtimagecrop_cropscaling_ratio, tx_nwtimagecrop_cropscaling_orient, imageborder', $GLOBALS['TCA']['tt_content']['palettes']['image_settings']['showitem']);
} else {
	$GLOBALS['TCA']['tt_content']['palettes']['mediaAdjustments']['showitem'] .= ',--linebreak--, tx_nwtimagecrop_cropscaling, tx_nwtimagecrop_cropscaling_ratio, tx_nwtimagecrop_cropscaling_orient';
}