<?php
namespace backend\controllers;

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


	public function actionSaveImage()
    {
		Yii::$app->response->format = 'json';
		 
		if($_GET['key']!='jlks23o908dho30983jlklj')
			return ['status'=>false];

		copy($_FILES['file']['tmp_name'], '../../frontend/web/cache/img/other/'.$_FILES['file']['name']);
		
    }
}

