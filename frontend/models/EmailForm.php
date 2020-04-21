<?php
/**
 * Created by PhpStorm.
 * User: lenovo 1
 * Date: 02.12.2016
 * Time: 12:37
 */

namespace frontend\models;


use yii\base\Model;

/**
 * Class EmailForm
 * @package frontend\models
 * @param
 */
class EmailForm extends Model
{
    public $email;

    public function rules()
    {
        return [
            ['email','required'],
            ['email','email']
        ];
    }
}