<?php
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "blog_post2blog_tag".
 *
 * @property integer $id
 * @property string $post_id
 * @property string $tag_id
 */
class BlogPostToBlogTag extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'blog_post2blog_tag';
    }

    public function rules()
    {
        return [
            [['post_id', 'tag_id'], 'required']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'post_id' => 'Post ID',
            'tag_id' => 'Tag ID'
        ];
    }
}
