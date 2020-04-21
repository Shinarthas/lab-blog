<?php
/**
 * Created by PhpStorm.
 * User: lenovo 1
 * Date: 02.12.2016
 * Time: 14:12
 */

namespace common\models;


use yii\base\Model;
use yii\db\ActiveRecord;

class ClientEmail extends ActiveRecord
{
    const STATUS_NEW = 0;
    const STATUS_OLD = 1;

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['date_created'],
                ],
            ],
        ];
    }

    public static function tableName()
    {
        return '{{%client_email}}';
    }

}