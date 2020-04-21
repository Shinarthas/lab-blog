<?php
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "blog_tag".
 *
 * @property integer $id
 * @property string $title
 */
class BlogTag extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'blog_tag';
    }

    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 63]
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title'
        ];
    }

    public static function UsedTag()
    {
        return self::find()->joinWith([
            'relations' => function($query) {
                $query->andWhere('blog_post2blog_tag.id > 0');
                return $query;
            }
        ])->all();
    }

    public function getRelations()
    {
        return $this->hasMany(BlogPostToBlogTag::className(), [
            'tag_id' => 'id'
        ]);
    }
}
