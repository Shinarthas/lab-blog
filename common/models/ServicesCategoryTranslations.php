<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "blog_services_category_translations".
 *
 * @property integer $id
 * @property string $id_lang
 * @property integer $id_service_category
 * @property string $title
 * @property string $content
 * @property string $description
 */
class ServicesCategoryTranslations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog_services_category_translations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_service_category'], 'integer'],
            [['description'], 'string'],
            [['id_lang'], 'string', 'max' => 45],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_lang' => 'Id Lang',
            'id_service_category' => 'Id Service Category',
            'title' => 'Title',
            'description' => 'Description',
        ];
    }
}
