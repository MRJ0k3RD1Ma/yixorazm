<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/front';
    public $css = [
        'https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap',
        'assets/vendor/fonts/boxicons.css',
        'assets/vendor/css/core.css',
        'assets/vendor/css/theme-default.css',
        'assets/css/demo.css',
        'assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css',
        'assets/vendor/libs/apex-charts/apex-charts.css',
    ];
    public $js = [
        'assets/vendor/js/helpers.js',
        'assets/js/config.js',
//        'assets/vendor/libs/jquery/jquery.js',
        'assets/vendor/libs/popper/popper.js',
//        'assets/vendor/js/bootstrap.js',
        "assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js",
        'assets/vendor/js/menu.js',
        'assets/vendor/libs/apex-charts/apexcharts.js',
        'assets/js/main.js',
        'assets/js/dashboards-analytics.js',
        'assets/js/buttons.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
