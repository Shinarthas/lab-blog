<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "blog_client".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $contact_name
 * @property integer $from_where
 * @property string $account_to_contact
 * @property string $link_to_contact
 * @property string $site
 * @property string $phone
 * @property string $skype
 * @property string $email
 * @property string $comment
 * @property integer $category_id
 * @property integer $status
 * @property integer $created_at
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	 
	public static $from_where_array = ['unknown','UpWork','lab3m.com'];
	public static $category_array = ['unknown','web','ios','android','server','refactoring','UI/UX','ios+android'];
	public static $status_array = ['unknown','no contact','first contact','meeting','demo version','we declined','client declined', 'in tracker'];
	 
    public static function tableName()
    {
        return 'blog_client';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['from_where', 'category_id', 'status', 'created_at'], 'integer'],
            [['comment'], 'string'],
            [['name', 'description', 'contact_name', 'account_to_contact', 'est_budget', 'link_to_contact', 'site', 'phone', 'skype', 'email'], 'string', 'max' => 255],
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
            'description' => 'Description',
            'contact_name' => 'Contact Name',
            'from_where' => 'From Where',
            'account_to_contact' => 'Account To Contact',
            'link_to_contact' => 'Link To Contact',
            'site' => 'Site',
            'phone' => 'Phone',
            'skype' => 'Skype',
            'email' => 'Email',
            'comment' => 'Comment',
            'category_id' => 'Category ID',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }
}
