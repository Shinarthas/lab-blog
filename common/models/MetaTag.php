<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "meta_tag".
 *
 * @property integer $id
 * @property string $img
 * @property string $title
 * @property string $description
 * @property string $url
 */
class MetaTag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'meta_tag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['img', 'title', 'description', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Img',
            'title' => 'Title',
            'description' => 'Description',
            'url' => 'Url',
        ];
    }
}
