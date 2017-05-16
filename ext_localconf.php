<?php

if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$boot = function () {
	$_EXTKEY = 'nwt_imagecrop';

	$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
	$iconRegistry->registerIcon(
		'nwt-imagecrop-above-center',
		\TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
		['source' => 'EXT:' . $_EXTKEY . '/Resources/Public/Icons/selicons/above_center.gif']
	);
	$iconRegistry->registerIcon(
		'nwt-imagecrop-above-left',
		\TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
		['source' => 'EXT:' . $_EXTKEY . '/Resources/Public/Icons/selicons/above_left.gif']
	);
	$iconRegistry->registerIcon(
		'nwt-imagecrop-above-right',
		\TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
		['source' => 'EXT:' . $_EXTKEY . '/Resources/Public/Icons/selicons/above_right.gif']
	);
	$iconRegistry->registerIcon(
		'nwt-imagecrop-below-center',
		\TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
		['source' => 'EXT:' . $_EXTKEY . '/Resources/Public/Icons/selicons/below_center.gif']
	);
	$iconRegistry->registerIcon(
		'nwt-imagecrop-below-left',
		\TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
		['source' => 'EXT:' . $_EXTKEY . '/Resources/Public/Icons/selicons/below_left.gif']
	);
	$iconRegistry->registerIcon(
		'nwt-imagecrop-below-right',
		\TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
		['source' => 'EXT:' . $_EXTKEY . '/Resources/Public/Icons/selicons/below_right.gif']
	);
	$iconRegistry->registerIcon(
		'nwt-imagecrop-center-center',
		\TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
		['source' => 'EXT:' . $_EXTKEY . '/Resources/Public/Icons/selicons/center_center.gif']
	);
	$iconRegistry->registerIcon(
		'nwt-imagecrop-center-left',
		\TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
		['source' => 'EXT:' . $_EXTKEY . '/Resources/Public/Icons/selicons/center_left.gif']
	);
	$iconRegistry->registerIcon(
		'nwt-imagecrop-center-right',
		\TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
		['source' => 'EXT:' . $_EXTKEY . '/Resources/Public/Icons/selicons/center_right.gif']
	);
};

$boot();
unset($boot);