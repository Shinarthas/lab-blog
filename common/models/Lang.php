<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 13.12.2016
 * Time: 13:37
 */

namespace common\models;


use yii\db\ActiveRecord;

class Lang extends ActiveRecord
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
        return '{{%lang}}';
    }

    public static function getDefaultLang()
    {
        return self::find()->where(['lang_default'=>1])->one();
    }

    public static function getLangList()
    {
        return self::find()->asArray()->all();
    }

}