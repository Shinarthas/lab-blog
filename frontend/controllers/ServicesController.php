<?php
namespace frontend\controllers;

use common\models\Services;
use common\models\ServicesCategory;
use common\models\ServicesCategoryTranslations;
use common\models\ServicesTranslations;
use Yii;
use yii\web\Controller;
use common\models\Lang;
use yii\web\NotFoundHttpException;

class ServicesController extends Controller
{

    public $lang;


    public function beforeAction($action)
    {
        $this->view->registerLinkTag([
            'rel' => 'image_src',
            'type' => 'image/png',
            'href' => '/images/preview.png',
        ],'image_src');



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
//        foreach ($this->pages as $main_key => $main_page)
//        {
//            echo '
//            <url>
//                <loc>https://lab3m.com/services/'.$main_key.'</loc>
//                <changefreq>daily</changefreq>
//                <priority>0.4</priority>
//            </url>
//            ';
//            foreach ($main_page['pages'] as $key=>$sub_page)
//            {
//                echo '
//            <url>
//                <loc>https://lab3m.com/services/'.$main_key.'/'.$key.'</loc>
//                <changefreq>daily</changefreq>
//                <priority>0.8</priority>
//            </url>
//            ';
//            }
//        }
//        exit;
        $services=ServicesCategory::find()->select('blog_services_category_translations.*, blog_services_category.id,blog_services_category.url,blog_services_category.name,blog_services_category.image, blog_services.seo_url')
            ->where(['category_id'=>1])->joinWith('translations')->where(['id_lang'=>Yii::$app->language])
            ->joinWith('services')
            ->asArray()
            //->createCommand()->rawSql;echo $services; die();
            ->all();


        return $this->render('index',['lang'=>$this->lang,'services'=>$services]);
    }

    public function actionShowService($category)
    {
//        $pages = [
//            /*'seo_url'=>'view_name',*/
//            'web-development'=>'web-development',
//            'mobile-development'=>'mobile-development',
//            'outsourcing'=>'outsourcing',
//            'design'=>'design',
//            'qa-testing'=>'qa-testing',
//            'ongoing-tech-support'=>'ongoing-tech-support',
//            'security-and-compliance'=>'security-and-compliance',
//            'cloud-computing'=>'cloud-computing',
//            'ecommerce-cms'=>'ecommerce-cms',
//            'shopify-development'=>'shopify-development'
//        ];


        $h1= isset($this->pages[$_GET['category']]) ? (isset($this->pages[$_GET['category']]['name']) ? $this->pages[$_GET['category']]['name'] : ucfirst(str_replace('-',' ',$this->pages[$_GET['category']]['view']))) : "";

        if(isset($this->pages[$category]))
        {

            return $this->render($this->pages[$category]['view'],['pages'=>$this->pages,'lang'=>$this->lang,'h1'=>$h1]);
        }else{
           throw new \yii\web\HttpException(404);
        }
    }

    public function actionShowSubService($category,$subcategory)
    {

        $h1= isset($this->pages[$_GET['category']]) ? (isset($this->pages[$_GET['category']]['name']) ? $this->pages[$_GET['category']]['name'] : ucfirst(str_replace('-',' ',$this->pages[$_GET['category']]['view']))) : "";
        if(!empty($h1) && isset($_GET['subcategory']))
        {
            $h1.=' - '.(isset($this->pages[$_GET['category']]['pages'][$_GET['subcategory']]) ? (isset($this->pages[$_GET['category']]['pages'][$_GET['subcategory']]['name']) ? $this->pages[$_GET['category']]['pages'][$_GET['subcategory']]['name'] : ucfirst(str_replace('-',' ',$this->pages[$_GET['category']]['pages'][$_GET['subcategory']]))) : "");
        }

      if(isset($this->pages[$category]) && isset($this->pages[$category]['pages'][$subcategory]))
      {
          $view = is_array($this->pages[$category]['pages'][$subcategory]) ? $this->pages[$category]['pages'][$subcategory]['view'] : $this->pages[$category]['pages'][$subcategory];

          return  $this->render($this->pages[$category]['view'].DIRECTORY_SEPARATOR.$view,['pages'=>$this->pages,'lang'=>$this->lang,'h1'=>$h1]);
      }else{
          throw new \yii\web\HttpException(404);
      }

    }
    public function actionShowServiceCategory($id)
    {
        $selected_category = ServicesCategory::find()
            ->select('*')
            ->where([ServicesCategory::tableName().'.url'=>$id])
            ->asArray()->one();
        //->createCommand()->rawSql;
//        if(!$selected_category)
//			return $this->redirect("/services");


        $translations_list = ServicesCategoryTranslations::find()->select(['id_lang'])->where(['id_service_category'=>$selected_category['id'],'id_lang'=>Yii::$app->language])->asArray()->all();
        if(true)
        {
            $translation = ServicesCategoryTranslations::find()->where(['id_service_category'=>$selected_category['id'],'id_lang'=>Yii::$app->language])->asArray()->one();
            if(!empty($translation)){
                $selected_category['title'] = $translation['title'];
                $selected_category['description'] = $translation['description'];
                $selected_category['content'] = $translation['content'];
            }
        }

        //$menu = ServicesCategory::find()->joinWith('servicesName')->all();
        $menu = Services::find()->select('blog_services.*,
         blog_services_translations.h1,blog_services_translations.name')->where(['category_id'=>$selected_category['id']])
            ->joinWith('translations')->andWhere(['id_lang'=>Yii::$app->language])
            //->createCommand()->rawSql; echo $menu; die();
            ->all();


        return $this->render('../services/show-service-category',['menu'=>$menu,'model'=>$selected_category,'lang'=>$this->lang,'h1'=>$selected_category['name'],'trans_list'=>$translations_list]);
    }
    public function actionShowDbService($category)
    {

        //echo "Aaaa"; die();
        $selected_category = Services::find()
            ->select('*')
            ->where([Services::tableName().'.seo_url'=>$category])
            ->asArray()->one();
            //->createCommand()->rawSql;
//        if(!$selected_category)
//			return $this->redirect("/services");

        if(empty($selected_category))
            throw new NotFoundHttpException('Service not found');
        $translations_list = ServicesTranslations::find()->select(['id_lang'])->where(['id_service'=>$selected_category['id']])->asArray()->all();
        if(true)
        {
            $translation = ServicesTranslations::find()->where(['id_service'=>$selected_category['id'],'id_lang'=>Yii::$app->language])->asArray()->one();
            if(!empty($translation)){
            $selected_category['h1'] = $translation['h1'];
            $selected_category['name'] = $translation['name'];
            $selected_category['content'] = $translation['content'];
            $selected_category['meta_desc'] = $translation['meta_desc'];
            $selected_category['meta_title'] = $translation['meta_title'];
            $selected_category['meta_image'] = $translation['meta_image'];
            }
        }

        //$menu = ServicesCategory::find()->joinWith('servicesName')->all();
        $menu = Services::find()->select('blog_services.*,
         blog_services_translations.h1,blog_services_translations.name')->where(['category_id'=>$selected_category['category_id']])
            ->joinWith('translations')->andWhere(['id_lang'=>Yii::$app->language])
            //->createCommand()->rawSql; echo $menu; die();
            ->all();


        return $this->render('../services/show-service',['menu'=>$menu,'model'=>$selected_category,'lang'=>$this->lang,'h1'=>$selected_category['name'],'trans_list'=>$translations_list]);
    }
	
    public static function showDbService($category,$controller)
    {


        $selected_category = ServicesCategory::find()->select('*')->where([Services::tableName().'.seo_url'=>'',ServicesCategory::tableName().'.url'=>$category])->joinWith('services')->asArray()->one();
		if(!$selected_category)
			return ['error'=>404];
        if(empty($selected_category))
            throw new NotFoundHttpException('Category not found');

        $translations_list = ServicesTranslations::find()->select(['id_lang'])->where(['id_service'=>$selected_category['id']])->asArray()->all();
        if($controller->lang->lang_default !=1)
        {
            $translation = ServicesTranslations::find()->where(['id_service'=>$selected_category['id'],'id_lang'=>$controller->lang->id])->asArray()->one();
            if(!empty($translation)){
            $selected_category['h1'] = $translation['h1'];
            $selected_category['name'] = $translation['name'];
            $selected_category['content'] = $translation['content'];
            $selected_category['meta_desc'] = $translation['meta_desc'];
            }
        }

        $menu = ServicesCategory::find()->joinWith('servicesName')->all();


        return ['menu'=>$menu,'model'=>$selected_category,'lang'=>$controller->lang,'h1'=>$selected_category['name'],'trans_list'=>$translations_list];
    }

    public function actionShowDbSubService($category,$subcategory)
    {
        $selected_category = Services::find()
            ->select('*')
            ->where([Services::tableName().'.seo_url'=>$category])
            ->asArray()->one();
        //->createCommand()->rawSql;
//        if(!$selected_category)
//			return $this->redirect("/services");
        if(empty($selected_category))
            throw new NotFoundHttpException('Category not found');

        $translations_list = ServicesTranslations::find()->select(['id_lang'])->where(['id_service'=>$selected_category['id']])->asArray()->all();
        if(true)
        {
            $translation = ServicesTranslations::find()->where(['id_service'=>$selected_category['id'],'id_lang'=>Yii::$app->language])->asArray()->one();
            if(!empty($translation)){
                $selected_category['h1'] = $translation['h1'];
                $selected_category['name'] = $translation['name'];
                $selected_category['content'] = $translation['content'];
                $selected_category['meta_desc'] = $translation['meta_desc'];
            }
        }

        //$menu = ServicesCategory::find()->joinWith('servicesName')->all();
        $menu = Services::find()->select('blog_services.*,
         blog_services_translations.h1,blog_services_translations.name')->where(['category_id'=>$selected_category['category_id']])
            ->joinWith('translations')->andWhere(['id_lang'=>Yii::$app->language])
            //->createCommand()->rawSql; echo $menu; die();
            ->all();


        return $this->render('../services/show-service',['menu'=>$menu,'model'=>$selected_category,'lang'=>$this->lang,'h1'=>$selected_category['name'],'trans_list'=>$translations_list]);

    }


}
