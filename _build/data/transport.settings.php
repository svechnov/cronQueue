<?php
/** @var modX $modx */
/** @var array $sources */

$settings = array();

$tmp = array(
    'functions' => array(
        'xtype' => 'textarea',
        'value' => 'core/components/cronqueue/model/cronqueue/default.php',
        'area' => 'cronqueue_main',
    ),
);

foreach ($tmp as $k => $v) {
    /** @var modSystemSetting $setting */
    $setting = $modx->newObject('modSystemSetting');
    $setting->fromArray(array_merge(
        array(
            'key' => 'cronqueue_' . $k,
            'namespace' => PKG_NAME_LOWER,
        ), $v
    ), '', true, true);

    $settings[] = $setting;
}
unset($tmp);

return $settings;
