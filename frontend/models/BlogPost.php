<?php
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "blog_post".
 *
 * @property integer $id
 * @property string $title
 * @property string $entry
 * @property string $author_id
 * @property string $date
 * @property string $background
 */
class BlogPost extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'blog_post';
    }

    public function rules()
    {
        return [
            [['title', 'entry', 'author_id', 'date', 'background'], 'required'],
            [['author_id', 'date'], 'integer'],
            [['title', 'entry', 'background'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['background'], 'string', 'max' => 63]
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'entry' => 'Пост',
            'author_id' => 'Автор статьи',
            'date' => 'Дата',
            'background' => 'Фоновое изображение'
        ];
    }

    public function getAuthor()
    {
        return $this->hasOne(BlogUser::className(), [
            'id' => 'author_id'
        ]);
    }

    public function getTag()
    {
        return $this->hasMany(BlogTag::className(), ['id' => 'tag_id'])->via('tagRelation');
    }

    public function getTagRelation()
    {
        return $this->hasMany(BlogPostToBlogTag::className(), [
            'post_id' => 'id'
        ]);
    }
}
