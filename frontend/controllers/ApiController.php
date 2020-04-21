<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Contacts;

class ApiController extends Controller
{
	public function beforeAction($a)
	{
		$this->enableCsrfValidation = false;
		return parent::beforeAction($a);
	}

    public function actionContacts()
    {
		 Yii::$app->response->format = 'json';
		 
		 
		if($_GET['key']!='jlks23o908dho30983jlklj')
			return ['status'=>false];
			
		$contacts = Contacts::find()->all();
        return ['status'=>true,'contacts'=>$contacts];
    }
	
	public function actionSaveImage()
    {
		 Yii::$app->response->format = 'json';
		 
		if($_GET['key']!='jlks23o908dho30983jlklj')
			return ['status'=>false];
			
		copy($_GET['url'], 'cache/img/other/'.$_GET['filename']);
		
    }
	
	public function actionMyCountry()
	{
		echo geoip_country_code_by_name($_SERVER['REMOTE_ADDR']);
		exit();
	}
}

