<?php
namespace frontend\assets;

use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'styles/reset.css',
        'styles/fonts.css',
        'styles/admin.css',
    ];
    public $js = [
    ];
    public $depends = [
    ];
}
