<?php

$tca = [
  'visibilityxs' => [
    'label' => 'LLL:EXT:visibility/Resources/Private/Language/locallang_ttc.xlf:visibilityxs_formlabel',
    'config' => [
      'type' => 'check',
      'items' => [
        ['LLL:EXT:visibility/Resources/Private/Language/locallang_ttc.xlf:visibility_val', '1'],
      ],
      'default' => 1,
    ]
  ],
  'visibilitysm' => [
    'label' => 'LLL:EXT:visibility/Resources/Private/Language/locallang_ttc.xlf:visibilitysm_formlabel',
    'config' => [
      'type' => 'check',
      'items' => [
        ['LLL:EXT:visibility/Resources/Private/Language/locallang_ttc.xlf:visibility_val', '1'],
      ],
      'default' => 1,
    ]
  ],
  'visibilitymd' => [
    'label' => 'LLL:EXT:visibility/Resources/Private/Language/locallang_ttc.xlf:visibilitymd_formlabel',
    'config' => [
      'type' => 'check',
      'items' => [
        ['LLL:EXT:visibility/Resources/Private/Language/locallang_ttc.xlf:visibility_val', '1'],
      ],
      'default' => 1,
    ]
  ],
  'visibilitylg' => [
    'label' => 'LLL:EXT:visibility/Resources/Private/Language/locallang_ttc.xlf:visibilitylg_formlabel',
    'config' => [
      'type' => 'check',
      'items' => [
        ['LLL:EXT:visibility/Resources/Private/Language/locallang_ttc.xlf:visibility_val', '1'],
      ],
      'default' => 1,
    ]
  ],
  'visibilityxl' => [
    'label' => 'LLL:EXT:visibility/Resources/Private/Language/locallang_ttc.xlf:visibilityxl_formlabel',
    'config' => [
      'type' => 'check',
      'items' => [
        ['LLL:EXT:visibility/Resources/Private/Language/locallang_ttc.xlf:visibility_val', '1'],
      ],
      'default' => 1,
    ]
  ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
  'tt_content',
  $tca,
  1
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
  'tt_content',
  'frames', '--linebreak--,visibilityxs, visibilitysm, visibilitymd, visibilitylg, visibilityxl'
);
