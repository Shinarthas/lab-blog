<?php
namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * User model
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $auth_key
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password write-only password
 */
class User extends ActiveRecord implements IdentityInterface
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return boolean
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }

    public static function getUsersNameList()
    {
        return $model = self::find()->select(['id','name','position'])->all();

    }
	
	public static function countryCode()
	{
        if(YII_DEBUG)
         return "UA";
		$user_country = \Yii::$app->session->get("user_country");
		if($user_country=="")
		{
			$user_country = geoip_country_code_by_name($_SERVER['REMOTE_ADDR']);
			\Yii::$app->session->set("user_country", $user_country);
		}
		if($user_country != "US" AND $user_country!="GB")
			$user_country = "OTHER";
		
		return $user_country;
	}
	
	public static function history()
	{
		$pages_history = \Yii::$app->session->get("pages_history");
		if(count($pages_history) == 0 )
			$pages_history = [['time'=>time(),'link'=>$_SERVER['HTTP_REFERER']]];
		
		$pages_history[] = ['time'=>time(),'link'=>$_SERVER['REQUEST_URI']];
		\Yii::$app->session->set("pages_history", $pages_history);
	
		// contact requests
		$cookie_contact_requests = \Yii::$app->request->cookies['contact_requests']->value;
		$contact_requests = \Yii::$app->session->get("contact_requests");
		
		// if isset cookie request, but them not stored in session
		if((count($contact_requests)==0) AND (count($cookie_contact_requests)!=0))
		{
			foreach($cookie_contact_requests as $cookie_request)
			{
				if(!$contact = Contacts::findOne($cookie_request['id']))
				{
					\Yii::$app->request->cookies->remove('contact_requests');
					break; 
				}
				if($cookie_request['key']!=$contact->key)
				{
					\Yii::$app->request->cookies->remove('contact_requests');
					break; 
				}
				
				$contact_requests[] = $cookie_request['id'];
			}
			
			\Yii::$app->session->set("contact_requests", $contact_requests);
		}
		
		if(count($contact_requests)!=0)
		{
			foreach($contact_requests as $request_id)
			{
				$m = new ContactMovement();
				$m->contact_id = $request_id;
				$m->url = $_SERVER['REQUEST_URI'];
				$m->save();
			}
		}
	}
}
