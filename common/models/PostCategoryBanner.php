<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%post_category_banner}}".
 *
 * @property integer $id
 * @property integer $id_post
 * @property integer $id_category
 * @property integer $date_create
 */
class PostCategoryBanner extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%post_category_banner}}';
    }

    public static function clearBanner($id_category)
    {
        return self::deleteAll(['id_category'=>$id_category]);
    }

    public function getPost()
    {
        return $this->hasOne(Post::className(), ['id' => 'id_post']);
    }

    public function getPostName()
    {
        return $this->hasOne(Post::className(), ['id' => 'id_post'])->select([Post::tableName().'.title',Post::tableName().'.id']);
    }

    public function getPostInfo()
    {
        return $this->hasOne(Post::className(), ['id' => 'id_post'])->select([Post::tableName().'.background',Post::tableName().'.background_path',Post::tableName().'.seo_url',Post::tableName().'.title',Post::tableName().'.id']);
    }


}
