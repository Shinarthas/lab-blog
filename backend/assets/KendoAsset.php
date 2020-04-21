<?php
namespace backend\assets;

use yii\web\View;
use yii\web\AssetBundle;

class KendoAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/vendor/kendo/css/kendo.common.min.css',
        'css/vendor/kendo/css/kendo.silver.min.css',
        'css/vendor/kendo/css/kendo-custom.css',
    ];

    public $js = [
        'css/vendor/kendo/js/kendo.all.min.js',
        'css/vendor/kendo/js/kendo.web.min.js',
        'css/vendor/kendo/js/messages/kendo.messages.ru-RU.min.js',
    ];

    public $depends = [
        'backend\assets\AppAsset',
    ];

    public function init()
    {
        $this->jsOptions['position'] = View::POS_HEAD;

        parent::init();
    }
}
