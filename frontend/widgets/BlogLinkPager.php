<?php

/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 17.01.2017
 * Time: 12:15
 */

namespace frontend\widgets;

class BlogLinkPager extends \yii\widgets\LinkPager
{
    public $linkOptions = ['rel'=>'nofollow'];
    public $maxButtonCount = 5;

    public function init()
    {
        parent::init();
    }
}