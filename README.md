# TYPO3 Extension: Bootstrap Datetimepicker

**See [Tempus Dominus](https://github.com/billdagou/tempus_dominus) instead.**

EXT:bootstrap_datetimepicker allows you to use [Bootstrap Datetimepicker](https://getdatepicker.com/) in your extensions.

The extension version only matches the Bootstrap Datetimepicker library version, it doesn't mean anything else.

## How to use it

You can load the library in your Fluid template.

    <bsdtp:css />
    <bsdtp:js />

You can also load your own libraries.

    <bsdtp:css href="..." />
    <bsdtp:js src="..." />

For more options please refer to &lt;f:asset.css&gt; and &lt;f:asset.script&gt;.

To use other Bootstrap Datetimepicker source, you can register it in `ext_localconf.php` or `AdditionalConfiguration.php`.

    \Dagou\BootstrapDatetimepicker\Utility\ExtensionUtility::registerSource(\Dagou\BootstrapDatetimepicker\Source\CloudFlare::class);