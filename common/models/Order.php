<?php

namespace common\models;

use common\components\BinanceExchange;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property int $account_id
 * @property int $status
 * @property int $sell
 * @property float $tokens_count
 * @property float $rate
 * @property int $progress
 * @property string $data_json
 * @property string|null $external_id
 * @property string|null $market_order_id
 * @property int|null $canceled
 * @property int $time
 * @property int $created_at
 * @property int $loaded_at
 * @property float|null $start_rate
 * @property int $currency_one
 * @property int $currency_two
 * @property int|null $is_user
 * @property int|null $is_downgrade
 * @property float|null $local_max
 */
class Order extends \yii\db\ActiveRecord
{
    public static $currency_to_usdt=null;

    const STATUS_NEW = 0;
    //const STATUS_STARTED = 1;
    const STATUS_CREATED = 2;
    const STATUS_PRICE_ERROR = 3;
    const STATUS_CANCELED = 4;
    const STATUS_COMPLETED = 5;
    const STATUS_ACCOUNT_NOT_FOUND = 6;
    const STATUS_VALUE_ERROR = 7;
    const STATUS_FAILED = 8;


    public static $statuses = [
        self::STATUS_NEW => 'new',
        //self::STATUS_STARTED => 'started',
        self::STATUS_CREATED => 'created',
        self::STATUS_PRICE_ERROR => 'error',
        self::STATUS_CANCELED => 'canceled by system',
        self::STATUS_COMPLETED => 'completed',
        self::STATUS_ACCOUNT_NOT_FOUND => 'account not found',
        self::STATUS_VALUE_ERROR => 'too low order',
        self::STATUS_FAILED => 'transaction failed',
    ];

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'account_id' => 'Account ID',
            'status' => 'Status',
            'sell' => 'Sell',
            'tokens_count' => 'Tokens Count',
            'rate' => 'Rate',
            'progress' => 'Progress',
            'data_json' => 'Data Json',
            'external_id' => 'External ID',
            'market_order_id' => 'Market Order ID',
            'canceled' => 'Canceled',
            'time' => 'Time',
            'created_at' => 'Created At',
            'loaded_at' => 'Loaded At',
            'start_rate' => 'Start Rate',
            'currency_one' => 'Currency One',
            'currency_two' => 'Currency Two',
            'is_user' => 'Is User',
            'is_downgrade' => 'Is Downgrade',
            'local_max' => 'Local Max',
        ];
    }
    public function getData($assoc = true)
    {
        return json_decode($this->data_json,$assoc);
    }

    public function setData($data)
    {
        $this->data_json = json_encode($data);
    }
}
