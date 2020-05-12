<?php
namespace Dagou\BootstrapDatetimepicker\Interfaces;

interface CDN {
    const VERSION = '2.25.2';

    /**
     * @param string|NULL $css
     */
    public function loadCss(string $css = NULL);

    /**
     * @param string|NULL $js
     * @param bool $footer
     */
    public function loadJs(string $js = NULL, bool $footer = TRUE);
}