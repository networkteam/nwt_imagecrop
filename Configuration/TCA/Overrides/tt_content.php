<?php

if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$tempColumns = array(
	'tx_nwtimagecrop_cropscaling' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling',
		'config' => array(
			'type' => 'check',
			'default' => 0,
			'items' => Array(
				Array('LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling.I.0', ''),
			)
		)
	),
	'tx_nwtimagecrop_cropscaling_ratio' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_ratio',
		'config' => array(
			'type' => 'select',
			'renderType' => 'selectSingle',
			'default' => 0,
			'items' => Array(
				Array('LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_ratio.I.0', '0'),
				Array('LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_ratio.I.1', '1'),
				Array('LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_ratio.I.2', '16/9'),
				Array('LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_ratio.I.3', '4/3'),
				Array('LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_ratio.I.4', '9/16'),
				Array('LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_ratio.I.5', '3/4'),
			)
		)
	),
	'tx_nwtimagecrop_cropscaling_orient' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_orient',
		'config' => array(
			'type' => 'select',
			'renderType' => 'selectSingle',
			'items' => array(
				array(
					'LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_orient.I.1',
					1,
					'EXT:nwt_imagecrop/Ressources/Private/selicons/above_left.gif',
				),
				array(
					'LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_orient.I.2',
					2,
					'EXT:nwt_imagecrop/Ressources/Private/selicons/above_center.gif',
				),
				array(
					'LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_orient.I.3',
					3,
					'EXT:nwt_imagecrop/Ressources/Private/selicons/above_right.gif',
				),
				array(
					'LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_orient.I.8',
					8,
					'EXT:nwt_imagecrop/Ressources/Private/selicons/center_left.gif',
				),
				array(
					'LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_orient.I.0',
					0,
					'EXT:nwt_imagecrop/Ressources/Private/selicons/center_center.gif',
				),
				array(
					'LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_orient.I.4',
					4,
					'EXT:nwt_imagecrop/Ressources/Private/selicons/center_right.gif',
				),
				array(
					'LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_orient.I.7',
					7,
					'EXT:nwt_imagecrop/Ressources/Private/selicons/below_left.gif',
				),
				array(
					'LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_orient.I.6',
					6,
					'EXT:nwt_imagecrop/Ressources/Private/selicons/below_center.gif',
				),
				array(
					'LLL:EXT:nwt_imagecrop/locallang_db.xml:tt_content.tx_nwtimagecrop_cropscaling_orient.I.5',
					5,
					'EXT:nwt_imagecrop/Ressources/Private/selicons/below_right.gif',
				),
			),
			'selicon_cols' => 3,
			'showIconTable' => 1,
			'default' => 0,
			'size' => 1,
			'minitems' => 1,
			'maxitems' => 1,
			'iconsInOptionTags' => 1,
		)
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);

$GLOBALS['TCA']['tt_content']['palettes']['image_settings']['showitem'] = str_replace(', imageborder', ', tx_nwtimagecrop_cropscaling, tx_nwtimagecrop_cropscaling_ratio, tx_nwtimagecrop_cropscaling_orient, imageborder', $GLOBALS['TCA']['tt_content']['palettes']['image_settings']['showitem']);