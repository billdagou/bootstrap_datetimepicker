<?php
namespace Dagou\BootstrapDatetimepicker\ViewHelpers;

use Dagou\BootstrapDatetimepicker\CDN\Customization;
use Dagou\BootstrapDatetimepicker\CDN\Local;
use Dagou\BootstrapDatetimepicker\Interfaces\CDN;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

abstract class AbstractLoadViewHelper extends AbstractViewHelper {
    /**
     * @param bool $isCustomized
     *
     * @return \Dagou\BootstrapDatetimepicker\Interfaces\CDN
     */
    protected function getCDN(bool $isCustomized): CDN {
        if ($isCustomized) {
            return GeneralUtility::makeInstance(Customization::class);
        }

        if (($className = $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['bootstrap_datetimepicker']['CDN']) && is_subclass_of($className, CDN::class)) {
            return GeneralUtility::makeInstance($className);
        } else {
            return GeneralUtility::makeInstance(Local::class);
        }
    }
}