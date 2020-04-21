<?php
/**
 * Created by PhpStorm.
 * User: lenovo 1
 * Date: 22.11.2016
 * Time: 12:57
 */

namespace common\models;

use yii\base\Model;

class FileContactsLoadForm extends Model
{
    public $user_file;

    public function rules()
    {
        return [
            [['user_file'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }
}