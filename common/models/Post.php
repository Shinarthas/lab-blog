<?php
/**
 * Created by PhpStorm.
 * User: lenovo 1
 * Date: 08.11.2016
 * Time: 16:53
 */

namespace common\models;


use yii\db\ActiveRecord;

class Post extends ActiveRecord
{
    const POST_DRAFT = 0;
    const POST_ACTIVE = 1;
    const POST_ARCHIVE = 2;
    const POST_DISABLED = 3;
    const POST_PHP_DATE_FORMAT = 'Y-m-d H:i:s';

    public static $active_posts = [self::POST_ACTIVE];

    public static $statuses = [
        self::POST_DRAFT => 'Черновик',
        self::POST_ACTIVE => 'Опубликованно',
        self::POST_ARCHIVE => 'Архивный',
        self::POST_DISABLED => 'Отключено',
    ];

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
        return '{{%post}}';
    }

    public static function findSeoUrl($url)
    {
        return self::find()->select('seo_url,id')->where(['seo_url'=>$url])->asArray()->one();
    }

    public function getTranslations()
    {
        return $this->hasMany(PostTranslations::className(), ['id_post' => 'id'])->joinWith('lang');
    }

    public function getTranslation()
    {
        return $this->hasOne(PostTranslations::className(), ['id_post' => 'id']);
    }


    public function getCategory(){
        return $this->hasOne(PostToCategory::className(), ['id_post' => 'id']);
    }

    public function getCategoryName()
    {
        return $this->hasOne(PostToCategory::className(), ['id_post' => 'id'])->joinWith('category');
    }

	public function getContent_length()
	{
		return mb_strlen(preg_replace("|<.*>|isU","",$this->content) ,'UTF-8');
	}

}