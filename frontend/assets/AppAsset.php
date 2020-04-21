<?php
namespace frontend\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        /*'styles/bootstrap.min.css',*/
        /*'styles/fonts.css',*/
        /*'styles/app.min.css',*/
    ];
    public $js = [
        /*'scripts/jquery-1.12.4.min.js',
        'scripts/app.js',
        'scripts/bootstrap.min.js'*/
    ];
    public $depends = [
        
    ];

}
