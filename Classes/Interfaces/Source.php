<?php
namespace Dagou\BootstrapDatetimepicker\Interfaces;

interface Source {
    const VERSION = '5.39.0';

    /**
     * @return string
     */
    public function getCss(): string;

    /**
     * @return string
     */
    public function getJs(): string;
}