<?php
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "blog_user".
 *
 * @property integer $id
 * @property string $name
 * @property string $position
 * @property string $photo
 */
class BlogUser extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'blog_user';
    }

    public function rules()
    {
        return [
            [['name', 'position', 'photo'], 'required'],
            [['name', 'position', 'photo'], 'string', 'max' => 63]
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'position' => 'Position',
            'photo' => 'Photo'
        ];
    }
}
