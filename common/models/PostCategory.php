<?php
/**
 * Created by PhpStorm.
 * User: alex_
 * Date: 23.12.2016
 * Time: 20:56
 */

namespace common\models;


use yii\db\ActiveRecord;

class PostCategory extends ActiveRecord
{

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    \yii\db\ActiveRecord::EVENT_BEFORE_INSERT => ['date_create', 'date_update'],
                    \yii\db\ActiveRecord::EVENT_BEFORE_UPDATE => ['date_update'],
                ],
            ],
        ];
    }

    public static function tableName()
    {
        return '{{%post_category}}';
    }
}