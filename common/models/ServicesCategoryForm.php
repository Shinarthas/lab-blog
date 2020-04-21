<?php

namespace common\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "{{%services_category}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $url
 * @property integer $date_create
 */

class ServicesCategoryForm extends Model
{
    public $name;
    public $url;
    public $image;

    public $_id = 0;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'url'], 'required'],
            [['name', 'url'], 'string', 'max' => 255],
            ['url','ValidateUrl'],
        ];
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
            'image' => 'image',
            'date_create' => 'Date Create',
        ];
    }

    public function ValidateUrl($attribute, $params)
    {

        if(!empty(ServicesCategory::find()->where('id !='.$this->_id.'')->andWhere(['url'=>$this->$attribute])->one()))
        {
            $this->addError($attribute, 'Такая категория с сео url eже есть');
        }
    }
}
