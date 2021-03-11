# TYPO3 Extension: Bootstrap Datetimepicker

EXT:bootstrap_datetimepicker allows you to use [Bootstrap Datetimepicker](https://getdatepicker.com/) in your extensions.

The extension version only matches the Bootstrap Datetimepicker library version, it doesn't mean anything else.

## How to use it

You can load the library in your Fluid template.

    <bsdtp:loadCss />
    <bsdtp:loadJs />

You can also load your own libraries.

    <bsdtp:loadCss href="..." />
    <bsdtp:loadJs src="..." />

For more options please refer to &lt;f:asset.css&gt; and &lt;f:asset.script&gt;.

To use other Bootstrap Datetimepicker source, you can register it in `ext_localconf.php` or `AdditionalConfiguration.php`.

    \Dagou\BootstrapDatetimepicker\Utility\ExtensionUtility::registerSource(\Dagou\BootstrapDatetimepicker\Source\CDNJS::class);