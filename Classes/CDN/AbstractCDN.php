<?php
namespace Dagou\BootstrapDatetimepicker\CDN;

use Dagou\BootstrapDatetimepicker\Interfaces\CDN;
use Dagou\BootstrapDatetimepicker\Traits\PageRenderer;
use TYPO3\CMS\Core\SingletonInterface;

abstract class AbstractCDN implements CDN, SingletonInterface {
    use PageRenderer;
    const URL = '';

    /**
     * @param string|NULL $css
     */
    public function loadCss(string $css = NULL) {
        $css = $this->renderCss($css);

        $this->getPageRenderer()->addCssLibrary($css);
    }

    /**
     * @param string|NULL $css
     *
     * @return string
     */
    protected function renderCss(string $css = NULL): string {
        return static::URL.'css/'.$this->getCssBuild();
    }

    /**
     * @return string
     */
    protected function getCssBuild(): string {
        return 'bootstrap-datetimepicker.min.css';
    }

    /**
     * @param string|NULL $js
     * @param bool $footer
     */
    public function loadJs(string $js = NULL, bool $footer = TRUE) {
        $js = $this->renderJs($js);

        if ($footer) {
            $this->getPageRenderer()->addJsFooterLibrary('bootstrap_datetimepicker', $js);
        } else {
            $this->getPageRenderer()->addJsLibrary('bootstrap_datetimepicker', $js);
        }
    }

    /**
     * @param string|NULL $js
     *
     * @return string
     */
    protected function renderJs(string $js = NULL): string {
        return static::URL.'js/'.$this->getJsBuild();
    }

    /**
     * @return string
     */
    protected function getJsBuild(): string {
        return 'bootstrap-datetimepicker.min.js';
    }
}