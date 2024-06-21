<?php

/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        './dist/css/tabler.min.css?1684106062',
        './dist/css/tabler-flags.min.css?1684106062',
        './dist/css/tabler-payments.min.css?1684106062',
        './dist/css/tabler-vendors.min.css?1684106062',
        './dist/css/demo.min.css?1684106062'
    ];
    public $js = [
        './dist/js/demo-theme.min.js?1684106062',
        './dist/libs/apexcharts/dist/apexcharts.min.js?1684106062',
        './dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1684106062',
        './dist/libs/jsvectormap/dist/maps/world.js?1684106062',
        './dist/libs/jsvectormap/dist/maps/world-merc.js?1684106062',
        './dist/js/tabler.min.js?1684106062',
        './dist/js/demo.min.js?1684106062',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
