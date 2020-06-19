<?php
defined('TYPO3_MODE') || die ('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
  'Joekolade.' . $_EXTKEY,
  'Visibility',
  array(
    'Css' => 'renderCss',
  ),
  // non-cacheable actions
  array(
  )
);
