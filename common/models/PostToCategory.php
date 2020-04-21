<?php
/**
 * Created by PhpStorm.
 * User: alex_
 * Date: 23.12.2016
 * Time: 22:13
 */

namespace common\models;


use yii\db\ActiveRecord;

class PostToCategory extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%post_to_category}}';
    }

    public static function clearPostToCategory($idPost){
        self::deleteAll(['id_post'=>$idPost]);
    }

    public function getCategory(){
        return $this->hasOne(PostCategory::className(), ['id' => 'id_category']);
    }
}