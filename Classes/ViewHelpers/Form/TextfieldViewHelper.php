<?php
namespace Dagou\BootstrapDatetimepicker\ViewHelpers\Form;

class TextfieldViewHelper extends \Dagou\Bootstrap\ViewHelpers\Form\TextfieldViewHelper {
    public function initializeArguments() {
        parent::initializeArguments();

        $this->registerArgument('format', 'string', 'Date format', FALSE, \DateTime::W3C);
    }

    protected function getValueAttribute() {
        $value = parent::getValueAttribute();

        return $value instanceof \DateTime ? $value->format($this->arguments['format']) : $value;
    }
}