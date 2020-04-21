<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "blog_contact_history".
 *
 * @property integer $id
 * @property integer $contact_id
 * @property integer $status
 * @property string $data_json
 * @property integer $created_at
 */
class ContactHistory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog_contact_history';
    }
	
	public function beforeSave($insert)
	{
		if($insert)
		{
			$this->created_at = time();
		}
		
		return parent::beforeSave($insert);
	}

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contact_id', 'status'], 'required'],
            [['contact_id', 'status', 'created_at'], 'integer'],
            [['data_json'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'contact_id' => 'Contact ID',
            'status' => 'Status',
            'data_json' => 'Data Json',
            'created_at' => 'Created At',
        ];
    }
		
	public function getStatus_string()
	{
		return Contacts::$contacts_status_en[$this->status];
	}
}
