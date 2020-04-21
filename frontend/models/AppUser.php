<?php
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "app_user".
 *
 * @property integer $id
 * @property string $login
 * @property string $password
 */
class AppUser extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'app_user';
    }

    public function rules()
    {
        return [
            [['login', 'password'], 'required'],
            [['login'], 'unique'],
            [['login', 'password'], 'string', 'max' => 63]
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'password' => 'Password'
        ];
    }
}
