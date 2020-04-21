<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 13.12.2016
 * Time: 13:50
 */

namespace common\models;


use yii\db\ActiveRecord;

class PostTranslations extends ActiveRecord
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
        return '{{%post_translations}}';
    }

    public function getLang()
    {
        return $this->hasOne(Lang::className(), ['id' => 'id_lang']);
    }

}