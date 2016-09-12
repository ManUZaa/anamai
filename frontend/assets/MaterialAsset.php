<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class MaterialAsset extends AssetBundle
{
    public $basePath = '@themes/material';
    //public $baseUrl = '@web';
    public $css = [
        'css/base.min.css',
        'css/project.min.css',
        //'css/style.css'
        
    ];
    public $js = [
        'js/base.min.js',
        'js/project.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
