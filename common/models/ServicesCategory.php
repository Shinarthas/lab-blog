<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%services_category}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $url
 * @property string $image
 * @property integer $date_create
 */
class ServicesCategory extends \yii\db\ActiveRecord
{

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    \yii\db\ActiveRecord::EVENT_BEFORE_INSERT => ['date_create'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%services_category}}';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'url' => 'Url',
            'image' => 'Image',
            'date_create' => 'Date Create',
        ];
    }

    public function getAllCategory()
    {
        return self::find()->all();
    }

    public function getServicesName()
    {
        return $this->hasMany(Services::className(), ['category_id' => 'id']);
    }

    public function getServices()
    {
        return $this->hasMany(Services::className(), ['category_id' => 'id']);
    }
    public function getTranslations()
    {
        return $this->hasMany(ServicesCategoryTranslations::className(), ['id_service_category' => 'id']);
    }
}
