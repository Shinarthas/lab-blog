<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 06.12.2016
 * Time: 17:23
 */

namespace backend\controllers;


use yii\web\Controller;
use common\models\MetaTag;

class MetaController extends Controller
{
    public function behaviors() {
        return [
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['updateNews']
                    ],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
		$tags = MetaTag::find()->all();

        return $this->render('index', ['tags'=>$tags]);
    }
	
	public function actionEdit()
    {
		if(!$tag = MetaTag::findOne($_GET['id']))
			$tag = new MetaTag;
		
		if(isset($_POST['save'])) {
			$tag->load($_POST);
			if($tag->img=='')
				$tag->img = ' ';
			
			if($tag->id==0)
				$tag->save();
			
			if(strlen($_FILES['image']['tmp_name'])>0)
			{
				move_uploaded_file($_FILES['image']['tmp_name'], '../../frontend/web/images/temp/'.$tag->id.'_'.basename($_FILES['image']['name']));
				$tag->img = $tag->id.'_'.basename($_FILES['image']['name']);	
			}
			
			$tag->save();
			$this->redirect("/meta");
		}

        return $this->render('edit', ['tag'=>$tag]);
    }
}