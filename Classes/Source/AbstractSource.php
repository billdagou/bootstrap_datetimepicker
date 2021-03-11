<?php
namespace Dagou\BootstrapDatetimepicker\Source;

use Dagou\BootstrapDatetimepicker\Interfaces\Source;
use TYPO3\CMS\Core\SingletonInterface;

abstract class AbstractSource implements Source, SingletonInterface {
    const URL = '';

    /**
     * @return string
     */
    public function getCss(): string {
        return static::URL.'css/'.$this->getCssBuild();
    }

    /**
     * @return string
     */
    protected function getCssBuild(): string {
        return 'tempusdominus-bootstrap-4.min.css';
    }

    /**
     * @return string
     */
    public function getJs(): string {
        return static::URL.'js/'.$this->getJsBuild();
    }

    /**
     * @return string
     */
    protected function getJsBuild(): string {
        return 'tempusdominus-bootstrap-4.min.js';
    }
}