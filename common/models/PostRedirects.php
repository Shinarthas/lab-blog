<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%post_redirects}}".
 *
 * @property integer $id
 * @property string $url_from
 * @property string $url_too
 * @property integer $code
 * @property integer $date_create
 */
class PostRedirects extends \yii\db\ActiveRecord
{




    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    \yii\db\ActiveRecord::EVENT_BEFORE_INSERT => ['date_create'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%post_redirects}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['url_from', 'url_too', 'code'], 'required'],
            [['code'], 'integer'],
            [['url_from', 'url_too'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'url_from' => Yii::t('app', 'Url From'),
            'url_too' => Yii::t('app', 'Url Too'),
            'code' => Yii::t('app', 'Code'),
            'date_create' => Yii::t('app', 'Date Create'),
        ];
    }
}
