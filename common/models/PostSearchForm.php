<?php
/**
 * Created by PhpStorm.
 * User: alex_
 * Date: 09.02.2017
 * Time: 13:32
 */

namespace common\models;


use yii\base\Model;

class PostSearchForm extends Model
{
    public $search;


    public function  rules()
    {
        return [
            ['search','string', 'max'=>'255']
        ];
    }
}