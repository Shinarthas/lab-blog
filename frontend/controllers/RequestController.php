<?php
namespace frontend\controllers;

use common\models\Contacts;

use Yii;
use yii\web\Controller;


class RequestController extends Controller
{
	public $lang;
	
	public function actionAll()
	{
		$contact_requests = Yii::$app->session->get("contact_requests");
		if(count($contact_requests)==0)
			return $this->redirect("/");
		
		return $this->render("all", ['lang'=>$lang]);
	}
	
    public function actionView($id,$key)
    {
		if(!$contact = Contacts::findOne($id))
			return $this->redirect("/");
		
		if($key!=$contact->key)
			return $this->redirect("/");
			
		if(!isset($contact->data['server']))
		{
			$contact->data = ['server'=>$_SERVER, 'history'=>[]];
			$contact->save();
		}
		
		$contact->storeIntoCookie();
		
		return $this->render("view", ['contact'=>$contact, 'lang'=>$lang]);
	}
}
