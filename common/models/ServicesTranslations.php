<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%services_translations}}".
 *
 * @property integer $id
 * @property integer $id_service
 * @property integer $id_lang
 * @property string $h1
 * @property string $name
 * @property string $content
 * @property string $meta_desc
 * @property integer $date_update
 */
class ServicesTranslations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%services_translations}}';
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    \yii\db\ActiveRecord::EVENT_BEFORE_UPDATE => ['date_update'],
                ],
            ],
        ];
    }


    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_service' => 'Id Service',
            'h1' => 'H1',
            'name' => 'Name',
            'content' => 'Content',
            'meta_desc' => 'Meta Desc',
            'date_update' => 'Date Update',
        ];
    }


    public function getLang()
    {
        return $this->hasOne(Lang::className(), ['id' => 'id_lang']);
    }

}
