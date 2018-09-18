<?php
namespace Joekolade\Visibility\ViewHelpers;

class VisibilityViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{

    /**
     * @param array $data
     * @return string
     */
    public function render($data = array())
    {
        $lastBreakPointVisibility = 1;
        $outputHandler = array(
            'xs' => $data['visibilityxs'],
            'sm'=> $data['visibilitysm'],
            'md'=> $data['visibilitymd'],
            'lg'=> $data['visibilitylg'],
        );
        
        $outputClass = '';

        foreach ($outputHandler as $breakpoint => $visiblity){
            if($visiblity == $lastBreakPointVisibility) {
                continue;
            }
            $visibilityClass = $visiblity == 1 ? 'block' : 'none';

            if($breakpoint == 'xs'){
                $outputClass .= ' d-' . $visibilityClass;
            }
            else {
                $outputClass .= ' d-' . $breakpoint .'-' . $visibilityClass;
            }

            $outputClass = trim($outputClass);
            $lastBreakPointVisibility = $visiblity;
        }

        return $outputClass;
    }
}