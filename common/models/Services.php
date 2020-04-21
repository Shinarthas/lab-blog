<?php
/**
 * Created by PhpStorm.
 * User: alex_
 * Date: 24.01.2017
 * Time: 14:19
 */

namespace common\models;


use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%services}}".
 *
 *
 * @property string $category_id
 * @property string $title
 * @property string $h1
 * @property string $name
 * @property string $content
 * @property string $image
 * @property string $meta_desc
 * @property string $seo_url
 * @property string $date_published
 */

class Services extends ActiveRecord
{
    const SERVICE_DRAFT = 0;
    const SERVICE_ACTIVE = 1;
    const SERVICE_ARCHIVE = 2;
    const SERVICE_DISABLED = 3;
    const SERVICE_PHP_DATE_FORMAT = 'Y-m-d H:i:s';

    public static $active_services = [self::SERVICE_ACTIVE];

    public static $statuses = [
        self::SERVICE_DRAFT => 'Черновик',
        self::SERVICE_ACTIVE => 'Опубликованно',
        self::SERVICE_ARCHIVE => 'Архивный',
        self::SERVICE_DISABLED => 'Отключено',
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
        return '{{%services}}';
    }


    public function getTranslations()
    {
        return $this->hasMany(ServicesTranslations::className(), ['id_service' => 'id'])->joinWith('lang');
    }





}