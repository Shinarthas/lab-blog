<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%services_translations}}".
 *
 * @property integer $id
 * @property integer $id_service
 * @property string $h1
 * @property string $name
 * @property string $content
 * @property string $meta_desc
 * @property integer $date_update
 */
class ServicesTranslationsForm extends \yii\base\Model
{

    public $h1;
    public $name;
    public $content;
    public $meta_desc;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [ ['h1', 'name', 'content', 'meta_desc'], 'required'],
            [['content'], 'string'],
            [['h1', 'name'], 'string', 'max' => 255],
            [['meta_desc'], 'string', 'max' => 500],
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
}
