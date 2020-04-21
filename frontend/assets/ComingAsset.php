<?php
namespace frontend\assets;

use yii\web\AssetBundle;

class ComingAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'styles/reset.css',
        'styles/fonts.css',
        'styles/coming.css',
    ];
    public $js = [
    ];
    public $depends = [
    ];
}
