<?php

namespace Joekolade\Visibility\ViewHelpers;

use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class VisibilityViewHelper extends AbstractViewHelper
{

  public function initializeArguments()
  {
    $this->registerArgument('data', 'array', 'the tt_content data', true);
  }

  /**
   * @param array $data
   * @return string
   */
  public static function renderStatic(
    array $arguments,
    \Closure $renderChildrenClosure,
    RenderingContextInterface $renderingContext
  ) {
// fetch ts config
    $configurationManager = GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager');

    $typoScript = $configurationManager->getConfiguration(
      \TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface::CONFIGURATION_TYPE_FULL_TYPOSCRIPT
    );

    $tsSettings = $typoScript['plugin.']['tx_visibility.']['settings.'];

    $data = $arguments['data'];

    $outputClass  = '';

    if ($tsSettings['mobileFirst'] == 0) {
      array_reverse($outputClass);
    }

    $visibleIndex = 0;

    // modifier for the last breakpoint
    $lastBreakPointVisibility = 1;
    foreach ($tsSettings['breakpoints.'] as $breakpoint => $class_suffix) {
      if (!isset($data['visibility' . $breakpoint])) {
        continue;
      }

      $visibility = $data['visibility' . $breakpoint];
      $visibleIndex += $visibility;

      if ($visibility == $lastBreakPointVisibility) {
        continue;
      }

      $visibilityClass = $visibility == 1 ? $tsSettings['class_suffix_visible'] : $tsSettings['class_suffix_hidden'];

      if ($breakpoint == 'xs') {
        $outputClass .= ' ' . $tsSettings['class_prefix'] . $visibilityClass;
      } else {
        $outputClass .= ' ' . $tsSettings['class_prefix'] . $class_suffix. $visibilityClass;
      }
      $lastBreakPointVisibility = $visibility;
      $outputClass = ' ' . trim($outputClass);
    }

    // none visibility options are ticked
    if($visibleIndex == 0){
      return '';
    }

    return $outputClass;
  }
}
