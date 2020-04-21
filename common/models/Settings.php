<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 06.12.2016
 * Time: 16:23
 */

namespace common\models;


use yii\db\ActiveRecord;

/**
 * Class Settings
 * @package common\models
 * @property integer $date_create
 * @property integer $date_update
 * @property string $name
 * @property string $data
 *
 */

class Settings extends ActiveRecord
{
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    \yii\db\ActiveRecord::EVENT_BEFORE_INSERT => ['date_create', 'date_update'],
                    \yii\db\ActiveRecord::EVENT_BEFORE_UPDATE => ['date_update'],
                ],
            ],
        ];
    }

    public static function tableName()
    {
        return '{{%settings}}';
    }

    public static function getDataByName($name)
    {
        $data =  self::find()->where(['name'=>$name]);
        if(!empty($data))
        {
            return unserialize($data->data);
        }else{
            return null;
        }
    }

    public static function findByName($name){
        return  self::find()->where(['name'=>$name]);
    }

    public function addSetting($name,$data = false)
    {
        $model = new self();
        $model->name = $name;
        $model->data = $data;
        $model->save();
    }
}