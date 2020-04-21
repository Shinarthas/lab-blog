<?php
/**
 * Created by PhpStorm.
 * User: alex_
 * Date: 25.12.2016
 * Time: 23:54
 */

namespace common\models;


use yii\db\ActiveRecord;

class PostRelated extends ActiveRecord
{
    public $title;
    public $content_preview;
    public $seo_url;
    public $background;
    public $background_path;

    public static function tableName()
    {
        return '{{%post_related}}';
    }

    public static function clearPostRelated($idPost){
        self::deleteAll(['id_post'=>$idPost]);
    }

    public function getPost(){
        return $this->hasOne(Post::className(), ['id' => 'id_post_related'])->select([Post::tableName().'.title',Post::tableName().'.id']);
    }

    public function getPostTranslation(){
        return $this->hasOne(Post::className(), ['id' => 'id_post_related'])->joinWith('translation');
    }
}