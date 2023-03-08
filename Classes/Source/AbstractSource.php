<?php
namespace Dagou\BootstrapDatetimepicker\Source;

use Dagou\BootstrapDatetimepicker\Interfaces\Source;
use TYPO3\CMS\Core\SingletonInterface;

abstract class AbstractSource implements Source, SingletonInterface {
    protected const URL = '';
    protected const VERSION = '6.2.10';

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
        return 'tempus-dominus.min.css';
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
        return 'tempus-dominus.min.js';
    }
}