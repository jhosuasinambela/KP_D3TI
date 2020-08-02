<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/scrolling-nav.css',
        

        
    ];
    public $js = [

        'js/scrolling-nav.js"',
        'js/bootstrap.bundle.min.js',
        'js/jquery.min.js',
        'js/jquery.easing.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
