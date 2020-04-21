<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "blog_contact_movement".
 *
 * @property integer $id
 * @property integer $contact_id
 * @property string $url
 * @property integer $created_at
 */
class ContactMovement extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog_contact_movement';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contact_id', 'url'], 'required'],
            [['contact_id', 'created_at'], 'integer'],
            [['url'], 'string', 'max' => 255],
        ];
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
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'contact_id' => 'Contact ID',
            'url' => 'Url',
            'created_at' => 'Created At',
        ];
    }
}
