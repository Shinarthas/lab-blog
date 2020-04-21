<?php
/**
 * Created by PhpStorm.
 * User: lenovo 1
 * Date: 21.11.2016
 * Time: 15:38
 */

namespace common\models;


use yii\db\ActiveRecord;

/**
 * Class Contacts
 * @package common\models
 * @property string username
 * @property string email
 * @property string budget
 * @property integer status
 * @property string details
 *
 */
class Contacts extends ActiveRecord
{

    const CONTACTS_NEW = 0;
    const CONTACTS_VIEWED = 1;
    const CONTACTS_HIDDEN = 2;
    const CONTACTS_IN_WORK = 3;

    public static $contacts_status = [
        self::CONTACTS_NEW =>'Новая заявка',
        self::CONTACTS_VIEWED =>'Просмотрена',
        self::CONTACTS_HIDDEN =>'Скрыта/Отклонена',
        self::CONTACTS_IN_WORK =>'В обработке',
    ];
	
	public static $contacts_status_en = [
        self::CONTACTS_NEW =>'New',
        self::CONTACTS_VIEWED =>'Viewed',
        self::CONTACTS_HIDDEN =>'Rejected',
        self::CONTACTS_IN_WORK =>'In work',
    ];

    public static $contacts_available = [
        self::CONTACTS_NEW,
        self::CONTACTS_VIEWED,
        self::CONTACTS_IN_WORK
    ];

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['date_create'],
                ],
            ],
        ];
    }

    public static function tableName()
    {
        return '{{%contacts}}';
    }
	
	public function beforeSave($insert)
	{
		if($insert)
		{
			$this->data = [
				'server' => $_SERVER,
				'history' => \Yii::$app->session->get("pages_history"),
				'screen' => ['width'=>(int)$_POST['width'],'height'=>(int)$_POST['height']]
			];
			
			$headers = "From: support@thunderrise.com\r\n";
			$headers.= "Content-Type: text/html; charset=UTF-8\r\n";

			$text = "Имя: ".$this->username.'. Email: '.$this->email.'. Бюджет: '.$this->budget.'. Описание: '.$this->details;
			
			mail("ceofdi2016@gmail.com", "New request on site", \Yii::$app->controller->renderPartial("../mail/layout", ['name'=>'Dmitriy','content'=>$text]), $headers);
			mail("yu.dedzel@thunderrise.com", "New request on site", \Yii::$app->controller->renderPartial("../mail/layout", ['name'=>'Yuliya','content'=>$text]), $headers);
			mail("sale@thunderrise.com", "New request on site", \Yii::$app->controller->renderPartial("../mail/layout", ['name'=>'Sale manager','content'=>$text]), $headers);
			mail("unilex6@gmail.com", "New request on site", \Yii::$app->controller->renderPartial("../mail/layout", ['name'=>'Alex','content'=>$text]), $headers);
		}

		return parent::beforeSave($insert);
	}
	
	public function afterSave($insert, $changedAttributes)
	{	
		if($insert)
		{
			$headers = "From: support@thunderrise.com\r\n";
			$headers.= "Content-Type: text/html; charset=UTF-8\r\n";
			
			$client_text = '<p style="margin:0;line-height: 20px; ">Your request #'.$this->id.' is created!</p>'; 
			$client_text.= '<p style="margin:0;line-height: 20px; ">You can check and supplement it by the <a href="'.\Yii::getAlias('@front').'/request/'.$this->id.'/'.$this->key.'"  style="color:#ea8d0f;">following link</a></p>'; 
			$client_text.= '<p style="margin:0;line-height: 20px; ">We will respond you as soon as possible.</p>'; 
			
			mail($this->email, "Automatic mail", \Yii::$app->controller->renderPartial("../mail/layout", ['name'=>$this->username,'content'=>$client_text]), $headers);
			
			$h = new ContactHistory();
			$h->contact_id = $this->id;
			$h->status = $this->status;
			$h->save();
		}
		
		return parent::afterSave($insert, $changedAttributes);
	}

    public static function changeStatus($id,$status)
    {
        $model = self::findOne(['id'=>$id]);
        if(!empty($model)){
            $model->status = $status;
            $model->update();
			
			$h = new ContactHistory();
			$h->contact_id = $id;
			$h->status = $status;
			$h->save();
			
            return true;
        }else{
            return false;
        }
    }
	
	public function getStatus_string()
	{
		return self::$contacts_status_en[$this->status];
	}
	
	public function getKey()
	{
		// simple access key crypt without saving into datebase

		$string = md5(md5($this->id).''.md5($this->date_create).''.md5($this->username).''.md5($this->email));
		$new_string = '';
		for($i=0;$i<strlen($string);$i++)
		{
			$symbol = substr($string,$i,1);
			if($symbol!=0)
			{
				$symbol = ceil($symbol*15.52)+1;
				$new_string.= $symbol;
			}
			else
			{
				$new_string = $symbol.$new_string;
			}
		}
		return substr(base64_encode($new_string),8,48);
	}
	
	public static function myRequestsList()
	{
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
		
		if(count($contact_requests)==0)
			return [];
		
		$out = [];
		foreach($contact_requests as $request)
		{
			if($temp = self::findOne($request))
				$out[] = $temp;
		}
		
		return $out;
	}

	public function getData($assoc = true)
    {
        return json_decode($this->data_json,$assoc);
	}
	
    public function setData($data)
    {
        $this->data_json = json_encode($data);
    }
	
	public function getBrowser()
	{
		$u_agent = $this->data['server']['HTTP_USER_AGENT']; 
		$bname = 'Unknown';
		$platform = 'Unknown';
		$version= "";

		//First get the platform?
		if (preg_match('/linux/i', $u_agent)) {
			$platform = 'Linux';
		}
		elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
			$platform = 'Mac';
		}
		elseif (preg_match('/windows|win32/i', $u_agent)) {
			$platform = 'Windows';
		}

		// Next get the name of the useragent yes seperately and for good reason
		if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)) 
		{ 
			$bname = 'Internet Explorer'; 
			$ub = "MSIE"; 
		} 
		elseif(preg_match('/Firefox/i',$u_agent)) 
		{ 
			$bname = 'Mozilla Firefox'; 
			$ub = "Firefox"; 
		}
		elseif(preg_match('/OPR/i',$u_agent)) 
		{ 
			$bname = 'Opera'; 
			$ub = "Opera"; 
		} 
		elseif(preg_match('/Chrome/i',$u_agent)) 
		{ 
			$bname = 'Google Chrome'; 
			$ub = "Chrome"; 
		} 
		elseif(preg_match('/Safari/i',$u_agent)) 
		{ 
			$bname = 'Apple Safari'; 
			$ub = "Safari"; 
		} 
		elseif(preg_match('/Netscape/i',$u_agent)) 
		{ 
			$bname = 'Netscape'; 
			$ub = "Netscape"; 
		} 

		// finally get the correct version number
		$known = array('Version', $ub, 'other');
		$pattern = '#(?<browser>' . join('|', $known) .
		')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
		if (!preg_match_all($pattern, $u_agent, $matches)) {
			// we have no matching number just continue
		}

		// see how many we have
		$i = count($matches['browser']);
		if ($i != 1) {
			//we will have two since we are not using 'other' argument yet
			//see if version is before or after the name
			if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
				$version= $matches['version'][0];
			}
			else {
				$version= $matches['version'][1];
			}
		}
		else {
			$version= $matches['version'][0];
		}

		// check if we have a number
		if ($version==null || $version=="") {$version="?";}

		return array(
			'userAgent' => $u_agent,
			'name'      => $bname,
			'version'   => $version,
			'platform'  => $platform,
			'pattern'    => $pattern
		);
	}
	
	public function getTranslated_details()
	{
		$text = urlencode($this->details);
		$data_json = @file_get_contents("https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20171003T132503Z.8b0841a26a3b4418.9f4ffed4472aec3c5b4c89318329ef88a4d075ac&text=".$text."&lang=en-ru");
		return json_decode($data_json)->text[0];
	}
	
	public function getHistory()
    {
        return $this->hasMany(ContactHistory::className(), ['contact_id' => 'id']);
    }
	
	public function getMovement()
    {
        return $this->hasMany(ContactMovement::className(), ['contact_id' => 'id']);
    }
	
	public function getLastMovement()
	{
		 return $this->hasOne(ContactMovement::className(), ['contact_id' => 'id'])->orderBy("blog_contact_movement.id DESC")->limit(1);
	}
	
	public function getLast_online()
	{
		$last_movement = ContactMovement::find()->select("created_at")->where(['contact_id'=>$this->id])->orderBy("id DESC")->scalar();
		
		if($last_movement==0)
			return $this->date_create;
			
		return $last_movement;
	}
	
	public function storeIntoCookie()
	{
		$contact_requests = \Yii::$app->session->get("contact_requests");
		if(count($contact_requests)==0)
			$contact_requests = [];
		
		if(!in_array($this->id,$contact_requests))
		{
			$contact_requests[] = $this->id;
			\Yii::$app->session->set("contact_requests", $contact_requests);
		}
		
		$cookie_contact_requests = \Yii::$app->request->cookies['contact_requests']->value;
		$cookie_requests_ids = [];
		if(count($cookie_contact_requests)!=0)
			foreach($cookie_contact_requests as $cookie_request)
				$cookie_requests_ids[] = $cookie_request['id'];
		
		if(!in_array($this->id,$cookie_requests_ids))
		{
			$cookie_contact_requests[] = ['id'=>$this->id,'key'=>$this->key];
			
			if(count(\Yii::$app->request->cookies['contact_requests'])!=0)
				\Yii::$app->response->cookies->remove('contact_requests');
			
			\Yii::$app->response->cookies->add(new \yii\web\Cookie([
				'name' => 'contact_requests',
				'value' => $cookie_contact_requests,
				'expire' => time() + 86400 * 365,
			]));
		}
	}
}