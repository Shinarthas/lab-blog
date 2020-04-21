<?php
/**
 * Created by PhpStorm.
 * User: lenovo 1
 * Date: 15.11.2016
 * Time: 12:07
 */

namespace common\models;


use yii\db\ActiveRecord;

class Img extends ActiveRecord
{

    // максимальные резмеры картинки для постов
    const IMG_CACHE_POST_WIDTH = 850;
    const IMG_CACHE_POST_HEIGHT = 1200;

    // размеры плитки в админке
    const IMG_CACHE_PREV_WIDTH = 150;
    const IMG_CACHE_PREV_HEIGHT = 150;

    // превью среднее
    const IMG_CACHE_MEDIUM_WIDTH = 500;
    const IMG_CACHE_MEDIUM_HEIGHT = 500;
    // превью в списке статей
    const IMG_CACHE_POST_LIST_WIDTH = 960;
    const IMG_CACHE_POST_LIST_HEIGHT = 400;

    const IMG_CACHE_INNER_POST_WIDTH = 960;
    const IMG_CACHE_INNER_POST_HEIGHT = 960;

    const IMG_CACHE_BLOG_PREV_WIDTH = 665;
    const IMG_CACHE_BLOG_PREV_HEIGHT = 287;



    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['date_create'],
                ],
            ],
        ];
    }

    public static function tableName()
    {
        return '{{%img}}';
    }


    public static function getCachedImgPostSize($width,$height)
    {
        if($width>self::IMG_CACHE_POST_WIDTH)
         $width = self::IMG_CACHE_POST_WIDTH;

        if($height>self::IMG_CACHE_POST_HEIGHT)
         $height = self::IMG_CACHE_POST_HEIGHT;

        return [
            'width'=>$width,
            'height'=>$height
        ];
    }
}