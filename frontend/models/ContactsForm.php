<?php
/**
 * Created by PhpStorm.
 * User: lenovo 1
 * Date: 21.11.2016
 * Time: 13:56
 */

namespace frontend\models;


use yii\base\Model;

/**
 * Class ContactsForm
 * @package frontend\models
 * @property string username
 * @property string email
 * @property string budget
 * @property string details
 */

class ContactsForm extends Model
{

    public $username;
    public $email;
    public $budget;
    public $details;

    public function rules()
    {
        return [

            [['username', 'email'], 'required'],
            ['username','string'],
            ['email','email'],
            ['budget','string'],
            ['details','string'],
        ];
    }

}