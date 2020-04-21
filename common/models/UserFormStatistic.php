<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 06.12.2016
 * Time: 16:02
 */

namespace common\models;

use yii\db\ActiveRecord;

/**
 * Class UserFormStatistic
 * @package common\models
 *
 * @property integer $date_create
 * @property string $stat_date
 * @property integer $status
 */

class UserFormStatistic extends ActiveRecord
{

    const STATUS_NO = 0;
    const STATUS_OK = 1;

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    \yii\db\ActiveRecord::EVENT_BEFORE_INSERT => ['date_create']
                ],
            ],
        ];
    }

    public static function tableName()
    {
        return '{{%user_form_statistic}}';
    }

}