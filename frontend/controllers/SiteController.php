<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Lang;

class SiteController extends Controller
{
    public $lang;

    public function beforeAction($action)
    {
        $this->view->registerLinkTag([
            'rel' => 'image_src',
            'type' => 'image/png',
            'href' => '/images/preview.png',
        ],'image_src');

        $this->view->registerMetaTag([
            'property' => 'og:image',
            'content' => 'https://demol3m.fun/images/preview.png',
        ],'og_image');


        if(isset($_GET['language']) && strlen($_GET['language'])==2) {
            $lang = strip_tags($_GET['language']);
            $lang_model = Lang::find()->where(['url'=>$lang])->one();
            if(is_null($lang_model)){
                $lang_model = Lang::getDefaultLang();

            }
        }else{
            $lang_model = Lang::getDefaultLang();
        }

        $this->lang = $lang_model;
        $this->view->registerLinkTag(['href' => Yii::$app->request->absoluteUrl, 'rel'=>'alternate', 'hreflang'=>$this->lang->hreflang ],'alternate_link');
        return parent::beforeAction($action);
    }

    public function actionIndex()
    {
        $lang = Yii::$app->request->get('language');
        if(is_null($lang))
        return $this->render('index');
        else
        return $this->render('index_ru');
    }

    public function actionRedirPerm()
    {
        return $this->redirect('/', 302);
    }


    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

	public function actionHighScore()
	{
		Yii::$app->response->format = 'json';
		$user_result = (int)$_GET['user_result'];

		$out = [];
		$data = json_decode(file_get_contents("scripts/mario_data.json"));
		$limit = (int)$data->limit;
		
		$temp_counter = 0;
		foreach($data->list as $item)
		{
			if($item->score<=$user_result AND !isset($out['position']))
			{
				$out['list'][] = ['name'=>'Anonym', 'score'=>$user_result];
				$out['position'] = $temp_counter;
				$temp_counter++;
			}
			$out['list'][] = ['name'=>$item->name, 'score'=>$item->score];
			$temp_counter++;
			if($temp_counter>6)
			{
				$out['limit'] = $item->score;
				break;
			}
		}
		
		if($user_result>=$limit AND !isset($out['position']))
		{
			$out['list'][] = ['name'=>'Anonym', 'score'=>$user_result];
			$out['position'] = $temp_counter;
			$temp_counter++;
		}
		
		if(!isset($out['limit']))
			$out['limit'] = 0;
		
		
		if(isset($out['position']))
			file_put_contents("scripts/mario_data.json", json_encode($out));

		return $out;
	}
	
	public function actionHighScoreMark()
	{	
		$name = preg_replace(['|\;|','|\||','|<|','|>|'],'',$_GET['name']);
		if(strlen($name)<2 OR strlen($name)>20)
			exit();
		$data = json_decode(file_get_contents("scripts/mario_data.json"));
		$name_marked = false;
		foreach($data->list as $item)
		{
			if($item->score==$_GET['score'] AND !$name_marked)
			{
				$item->name = $name;
				$name_marked = true;
			}
		}
		
		file_put_contents("scripts/mario_data.json", json_encode($data));
	}
}
