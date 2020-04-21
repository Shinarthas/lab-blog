<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%post_category_banner}}".
 *
 * @property integer $id
 * @property integer $id_post
 * @property integer $id_category
 * @property integer $date_create
 */
class PostCategoryBannerForm extends \yii\base\Model
{

    public $id_post;
    public $id_category;
    public $post;

    public $_post;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_post', 'id_category'], 'required'],
            ['id_category', 'integer'],
            ['id_post','validatePost']
        ];
    }

    public function validatePost(){

        if(!is_array($this->id_post)){
            $this->addError('id_post', 'Ошибка заполнения связанных статей [#0]');
            return false;
        }else {
            unset($this->id_post[0]);
            if(count($this->id_post)!=3){
                $this->addError('id_post', 'Должно быть 3 связанных статьи для вывода баннера');
                return false;
            }else{

                return true;
            }
        }
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_post' => 'Id Post',
            'post'=>'Связанные посты',
            'id_category' => 'Id Category',
            'date_create' => 'Date Create',
        ];
    }
}
