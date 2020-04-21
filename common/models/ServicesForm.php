<?php

namespace common\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "{{%services}}".
 *
 *
 * @property string $category_id
 * @property string $title
 * @property string $h1
 * @property string $name
 * @property string $content
 * @property string $meta_desc
 * @property string $image
 * @property string $seo_url
 * @property string $date_published
 */
class ServicesForm extends Model
{

    public $category_id;
    public $h1;
    public $name;
    public $title;
    public $content;
    public $image;
    public $meta_desc;
    public $seo_url;
    public $date_published;

    public $_id = 0;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [];
        return [
            [['title', 'content', 'meta_desc','name','date_published','category_id'], 'required'],
            [['content', 'meta_desc','image'], 'string'],
            ['category_id','integer'],
            ['date_published', 'date', 'message' => '{attribute}: Не валидная дата!', 'format' => 'php:'.Services::SERVICE_PHP_DATE_FORMAT],
            [['title','name','seo_url','h1'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'image' => 'image',
            'meta_desc' => 'Meta Desc',
            'seo_url' => 'Seo Url',
            'date_published' => 'Date Published',
        ];
    }

    public function ValidateUrl($attribute, $params)
    {

        if(!empty(Services::find()->where('id !='.$this->_id.'')->andWhere(['seo_url'=>$this->$attribute])->one()))
        {
            $this->addError($attribute, 'Такая категория с сео url eже есть');
        }
    }

}
