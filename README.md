# TYPO3 Extension: Bootstrap Datetimepicker

EXT:bootstrap_datetimepicker allows you to use [Bootstrap Datetimepicker](http://eonasdan.github.io/bootstrap-datetimepicker/) in your extensions.

The extension version only matches the Bootstrap Datetimepicker library version, it doesn't mean anything else.

## How to use it

You can load the library in your Fluid template with **LoadViewHelper**.

    <bsdtp:load />

You can also load your own libraries.

    <bsdtp:load js="..." />
    
Or, load the javascript library on top.

    <bsdtp:load footer="false" />
    
To use the CDN resource, please set `$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['bootstrap_datetimepicker']['CDN']` in `ext_localconf.php` or `AdditionalConfiguration.php`.

    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['bootstrap_datetimepicker']['CDN'] = \Vendor\Extension\CDN::class;