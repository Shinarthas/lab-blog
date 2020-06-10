<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "strategy".
 *
 * @property int $id
 * @property string $name
 * @property double $profit
 * @property double $balance
 * @property int $accounts
 * @property string $data
 * @property string $created_at
 */
class Strategy extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'strategy';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['profit', 'balance'], 'number'],
            [['accounts'], 'integer'],
            [['data'], 'string'],
            [['created_at'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'profit' => 'Profit',
            'balance' => 'Balance',
            'accounts' => 'Accounts',
            'data' => 'Data',
            'created_at' => 'Created At',
        ];
    }
}
