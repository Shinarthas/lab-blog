<?php
/**
 * Created by PhpStorm.
 * User: lenovo 1
 * Date: 29.11.2016
 * Time: 15:20
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Lang;

class TestController extends  Controller
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
            'content' => 'https://lab3m.com/images/preview.png',
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
        //$this->view->registerLinkTag(['href' => Yii::$app->request->absoluteUrl, 'rel'=>'alternate', 'hreflang'=>$this->lang->hreflang ],'alternate_link');

        return parent::beforeAction($action);
    }

    public function actionIndex()
    {

        $seo_url = strip_tags($_GET['seo_name']);
        $local_dir = Yii::getAlias('@frontend').'/web/cache/temp_'.$seo_url.'.txt';
        $data  = file_get_contents($local_dir);
        $data = unserialize($data);
        if(!empty($data))
        {
            $data = (object) $data;
            return $this->render('index',['model'=>$data]);
        }
    }
	
	public function actionMeta() {
		return $this->renderPartial("meta");
	}

}