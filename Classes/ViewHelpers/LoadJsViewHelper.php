<?php
namespace Dagou\BootstrapDatetimepicker\ViewHelpers;

use Dagou\BootstrapDatetimepicker\Interfaces\Source;
use Dagou\BootstrapDatetimepicker\Source\Local;
use Dagou\BootstrapDatetimepicker\Utility\ExtensionUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper;

class LoadJsViewHelper extends ScriptViewHelper {
    public function initializeArguments(): void {
        parent::initializeArguments();

        $this->overrideArgument(
            'identifier',
            'string',
            'Use this identifier within templates to only inject your JS once, even though it is added multiple times.',
            FALSE,
            'bootstrap_datetimepicker'
        );
    }

    /**
     * @return string
     */
    public function render(): string {
        if (!$this->arguments['src']) {
            if (($className = ExtensionUtility::getSource()) && is_subclass_of($className, Source::class)) {
                $source = GeneralUtility::makeInstance($className);
            } else {
                $source = GeneralUtility::makeInstance(Local::class);
            }

            $this->tag->addAttribute('src', $source->getJs());
        }

        return parent::render();
    }
}