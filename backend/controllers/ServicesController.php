<?php
/**
 * Created by PhpStorm.
 * User: alex_
 * Date: 24.01.2017
 * Time: 13:05
 */

namespace backend\controllers;

use common\models\Services;
use common\models\ServicesCategory;
use common\models\ServicesCategoryForm;
use common\models\Lang;
use common\models\ServicesCategoryTranslations;
use common\models\ServicesTranslations;
use common\models\ServicesTranslationsForm;
use yii\base\Model;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\data\Pagination;
use Yii;
use yii\web\UploadedFile;

class ServicesController extends Controller
{

    function actionIndex()
    {
        $lang_list = Lang::find()->where(['lang_default'=>0])->all();
        //print_r($lang_list); exit;
        $query = Services::find()->orderBy([Services::tableName().'.id'=>SORT_DESC])->joinWith('translations');
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 10]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();


        return $this->render('index', [
            'models' => $models,
            'pages' => $pages,
            'lang'=>$lang_list,
        ]);

    }

    function actionAddService()
    {

        $model = new \common\models\ServicesForm();

        if ($model->load(Yii::$app->request->post())) {
            $post=Yii::$app->request->post();

            if (true) {
               $record = new Services();
               $record->category_id = $post['ServicesForm']['category_id'];
               $record->image = $post['ServicesForm']['image'];
               $record->title = $post['ServicesForm']['title'];
               $record->content = $post['content']['en'];
               $record->meta_desc = $post['meta_desc']['en'];
               $record->seo_url = $post['ServicesForm']['seo_url'];
                $parsed_date = date_parse_from_format(Services::SERVICE_PHP_DATE_FORMAT, $model->date_published);
                $record->date_published = mktime(
                    $parsed_date['hour'],
                    $parsed_date['minute'],
                    $parsed_date['second'],
                    $parsed_date['month'],
                    $parsed_date['day'],
                    $parsed_date['year']
                );
               $record->save();
                $ru_lang=ServicesTranslations::find()->where(['id_service'=>$record->id,'id_lang'=>'ru'])->limit(1)->one();
                if(empty($ru_lang))
                    $ru_lang=new ServicesTranslations();
                $ru_lang->id_service=$record->id;
                $ru_lang->id_lang='ru';
                $ru_lang->h1=$post['h1']['ru'];
                $ru_lang->name=$post['name']['ru'];
                $ru_lang->content=$post['content']['ru'];
                $ru_lang->meta_desc=$post['meta_desc']['ru'];
                $ru_lang->date_update=time();
                $ru_lang->save();

                $en_lang=ServicesTranslations::find()->where(['id_service'=>$record->id,'id_lang'=>'en'])->limit(1)->one();
                if(empty($en_lang))
                    $en_lang=new ServicesTranslations();
                $en_lang->id_service=$record->id;
                $en_lang->id_lang='en';
                $en_lang->h1=$post['h1']['en'];
                $en_lang->name=$post['name']['en'];
                $en_lang->content=$post['content']['en'];
                $en_lang->meta_desc=$post['meta_desc']['en'];
                $en_lang->date_update=time();
                $en_lang->save();

                $cn_lang=ServicesTranslations::find()->where(['id_service'=>$record->id,'id_lang'=>'cn'])->limit(1)->one();
                if(empty($cn_lang))
                    $cn_lang=new ServicesTranslations();
                $cn_lang->id_service=$record->id;
                $cn_lang->id_lang='cn';
                $cn_lang->h1=$post['h1']['cn'];
                $cn_lang->name=$post['name']['cn'];
                $cn_lang->content=$post['content']['cn'];
                $cn_lang->meta_desc=$post['meta_desc']['cn'];
                $cn_lang->date_update=time();
                $cn_lang->save();

                $this->redirect('/services');

            }
        }

        return $this->render('service', [
            'model' => $model,
        ]);

    }

    function actionCategoryServiceList()
    {
        $lang_list = Lang::find()->where(['lang_default'=>0])->all();
        $query = ServicesCategory::find()->orderBy([ServicesCategory::tableName().'.id'=>SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 10]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();


        return $this->render('category-service-list', [
            'models' => $models,
            'pages' => $pages,
            'lang'=>$lang_list,
        ]);
    }

    function actionAddCategoryService()
    {
        $model = new \common\models\ServicesCategoryForm();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                $post=Yii::$app->request->post();

                $record = new ServicesCategory();
                $record->name = $model->name;
                $record->image = $post['ServicesCategoryForm']['image'];
                $record->url = $model->url;
                $record->save();

                $ru_lang=new ServicesCategoryTranslations();
                $ru_lang->content=$post['content']['ru'];
                $ru_lang->id_service_category=$record->id;
                $ru_lang->id_lang='ru';
                $ru_lang->title=$post['title']['ru'];
                $ru_lang->description=$post['description']['ru'];
                $ru_lang->save();

                $en_lang=new ServicesCategoryTranslations();
                $en_lang->content=$post['content']['en'];
                $en_lang->id_service_category=$record->id;
                $en_lang->id_lang='en';
                $en_lang->title=$post['title']['en'];
                $en_lang->description=$post['description']['en'];
                $en_lang->save();


                $cn_lang=new ServicesCategoryTranslations();
                $cn_lang->id_service_category=$record->id;
                $cn_lang->content=$post['content']['cn'];
                $cn_lang->id_lang='cn';
                $cn_lang->title=$post['title']['cn'];
                $cn_lang->description=$post['description']['cn'];
                $cn_lang->save();


                $this->redirect('/services/category-service-list');


            }
        }
        return $this->render('category-service', [
            'model' => $model,
        ]);

    }

    function actionEditCategoryService()
    {
        if(isset($_GET['id']))
        {
            $id = intval($_GET['id']);

            $record = ServicesCategory::findOne(['id'=>$id]);
            $wtf=ServicesCategory::find()->where(['id'=>$id])->one();

            $model = new \common\models\ServicesCategoryForm();

            if ($model->load(Yii::$app->request->post())) {

                $model->_id = $id;

                if ($model->validate()) {
                    $post=Yii::$app->request->post();

                    $record->name = $model->name;
                    $record->image = $post['ServicesCategoryForm']['image'];
                    $record->url = $model->url;
                    $record->update();
                    print_r($record->errors);

                    $ru_lang=ServicesCategoryTranslations::find()->where(['id_service_category'=>$record->id,'id_lang'=>'ru'])->limit(1)->one();
                    if(empty($ru_lang))
                        $ru_lang=new ServicesCategoryTranslations();
                    $ru_lang->id_service_category=$record->id;
                    $ru_lang->id_lang='ru';
                    $ru_lang->title=$post['title']['ru'];
                    $ru_lang->content=$post['content']['ru'];
                    $ru_lang->description=$post['description']['ru'];
                    $ru_lang->save();
                    print_r($ru_lang->errors);

                    $en_lang=ServicesCategoryTranslations::find()->where(['id_service_category'=>$record->id,'id_lang'=>'en'])->limit(1)->one();
                    print_r(ArrayHelper::toArray($en_lang));
                    if(empty($en_lang))
                        $en_lang=new ServicesCategoryTranslations();
                    $en_lang->id_service_category=$record->id;
                    $en_lang->id_lang='en';
                    $en_lang->content=$post['content']['en'];
                    $en_lang->title=$post['title']['en'];
                    $en_lang->description=$post['description']['en'];
                    print_r(ArrayHelper::toArray($en_lang));
                    $en_lang->save();
                    print_r($en_lang->errors);
                    $cn_lang=ServicesCategoryTranslations::find()->where(['id_service_category'=>$record->id,'id_lang'=>'cn'])->limit(1)->one();
                    if(empty($cn_lang))
                        $cn_lang=new ServicesCategoryTranslations();
                    $cn_lang->id_service_category=$record->id;
                    $cn_lang->id_lang='cn';
                    $cn_lang->content=$post['content']['cn'];
                    $cn_lang->title=$post['title']['cn'];
                    $cn_lang->description=$post['description']['cn'];
                    $cn_lang->save();
                    print_r($cn_lang->errors);
                    //die();
                    $this->redirect('/services/category-service-list');
                }

            }else{

                $langs=ServicesCategoryTranslations::find()->where(['id_service_category'=>$record->id])->asArray()->all();
                //remap
                $remap=[];
                foreach ($langs as $l){
                    $remap['title'][$l['id_lang']]=$l['title'];
                    $remap['description'][$l['id_lang']]=$l['description'];
                    $remap['content'][$l['id_lang']]=$l['content'];
                }



                $model->name = $record->name;
                $model->image = $record->image;
                $model->url = $record->url;
            }

            return $this->render('category-service', [
                'model' => $model,
                'remap'=>$remap
            ]);
        }
    }

    function actionServiceEdit()
    {
        if(isset($_GET['id'])) {
            $id = intval($_GET['id']);
            $record = Services::find()->where(['blog_services.id'=>$id])->asArray()->joinWith('translations')->one();



            $model = new \common\models\ServicesForm();
            if ($model->load(Yii::$app->request->post())) {
                if ($model->validate()) {
                    $post=Yii::$app->request->post();
                    $record=Services::findOne($record['id']);

                    $record->category_id = $post['ServicesForm']['category_id'];
                    $record->image = $post['ServicesForm']['image'];
                    $record->title = $post['ServicesForm']['title'];
                    $record->content = $post['content']['en'];
                    $record->meta_desc = $post['meta_desc']['en'];
                    $record->seo_url = $post['ServicesForm']['seo_url'];
                    $parsed_date = date_parse_from_format(Services::SERVICE_PHP_DATE_FORMAT, $model->date_published);
                    $record->date_published = mktime(
                        $parsed_date['hour'],
                        $parsed_date['minute'],
                        $parsed_date['second'],
                        $parsed_date['month'],
                        $parsed_date['day'],
                        $parsed_date['year']
                    );
                    $record->save();

                    $ru_lang=ServicesTranslations::find()->where(['id_service'=>$record->id,'id_lang'=>'ru'])->limit(1)->one();
                    if(empty($ru_lang))
                        $ru_lang=new ServicesTranslations();
                    $ru_lang->id_service=$record->id;
                    $ru_lang->id_lang='ru';
                    $ru_lang->h1=$post['h1']['ru'];
                    $ru_lang->name=$post['name']['ru'];
                    $ru_lang->content=$post['content']['ru'];
                    $ru_lang->meta_desc=$post['meta_desc']['ru'];
                    $ru_lang->date_update=time();
                    $ru_lang->save();

                    $en_lang=ServicesTranslations::find()->where(['id_service'=>$record->id,'id_lang'=>'en'])->limit(1)->one();
                    if(empty($en_lang))
                        $en_lang=new ServicesTranslations();
                    $en_lang->id_service=$record->id;
                    $en_lang->id_lang='en';
                    $en_lang->h1=$post['h1']['en'];
                    $en_lang->name=$post['name']['en'];
                    $en_lang->content=$post['content']['en'];
                    $en_lang->meta_desc=$post['meta_desc']['en'];
                    $en_lang->date_update=time();
                    $en_lang->save();

                    $cn_lang=ServicesTranslations::find()->where(['id_service'=>$record->id,'id_lang'=>'cn'])->limit(1)->one();
                    if(empty($cn_lang))
                        $cn_lang=new ServicesTranslations();
                    $cn_lang->id_service=$record->id;
                    $cn_lang->id_lang='cn';
                    $cn_lang->h1=$post['h1']['cn'];
                    $cn_lang->name=$post['name']['cn'];
                    $cn_lang->content=$post['content']['cn'];
                    $cn_lang->meta_desc=$post['meta_desc']['cn'];
                    $cn_lang->date_update=time();
                    $cn_lang->save();
                    $this->redirect('/services');
                }

            }else{
                $record=json_decode(json_encode($record));
                $langs=ServicesTranslations::find()->where(['id_service'=>$record->id])->asArray()->all();

                //remap
                $remap=[];
                foreach ($langs as $l){
                    $remap['name'][$l['id_lang']]=$l['name'];
                    $remap['h1'][$l['id_lang']]=$l['h1'];
                    $remap['content'][$l['id_lang']]=$l['content'];
                    $remap['meta_desc'][$l['id_lang']]=$l['meta_desc'];
                }

                $model->category_id = $record->category_id;
                $model->h1 = $remap['h1']['en'];
                $model->name = $remap['h1']['name'];
                $model->image = $record->image;
                $model->title = $record->title;
                $model->content = $remap['h1']['content'];
                $model->meta_desc = $remap['h1']['meta_desc'];
                $model->seo_url = $record->seo_url;
                $model->date_published = date(Services::SERVICE_PHP_DATE_FORMAT,$record->date_published);

            }

            return $this->render('service', [
                'model' => $model,
                'remap'=>$remap
            ]);
        }
    }

    function actionServiceTranslation()
    {
        $id_service = intval($_GET['id_service']);
        $id_lang = intval($_GET['id_lang']);
        $lang = Lang::findOne(['id'=>$id_lang]);
        $parent_service = Services::findOne(['id'=>$id_service]);
        $model = new ServicesTranslationsForm();
        if ($model->load(Yii::$app->request->post())) {
            if($model->validate())
            {
                if(count($record = ServicesTranslations::findOne(['id_service'=>$id_service,'id_lang'=>$id_lang]))==0){
                $record = new ServicesTranslations();
                $record->id_service = $id_service;
                $record->id_lang = $id_lang;
                $record->h1 = $model->h1;
                $record->name = $model->name;
                $record->content = $model->content;
                $record->meta_desc = $model->meta_desc;
                $record->save();
                }else{
                    $record->h1 = $model->h1;
                    $record->name = $model->name;
                    $record->content = $model->content;
                    $record->meta_desc = $model->meta_desc;
                    $record->update();
                }
                print_r($record->errors);
                //$this->redirect('/services');
            }
        }else{
            if(count($record = ServicesTranslations::findOne(['id_service'=>$id_service,'id_lang'=>$id_lang]))!=0)
            {
                $model->h1 = $record->h1;
                $model->name = $record->name;
                $model->content = $record->content;
                $model->meta_desc = $record->meta_desc;
            }

        }

        return $this->render('services-translations', [
            'model' => $model,
            'lang'=>$lang,
            'parent_service'=>$parent_service
        ]);
    }

//    function actionParseCategories()
//    {
//        $array = [
//            'web-development'=>[
//                'view'=>'web-development',
//                /// seo name => view
//                'pages'=>[
//                    'industry'=>'industry',
//                    'our-way-of-development'=>'our-way-of-development',
//                    'development-sequence'=>'development-sequence',
//                    'databank'=>'databank',
//                    'cms'=>[
//                        'view'=>'cms',
//                        'name'=>'CMS'
//                    ],
//                    'responsive'=>'responsive',
//                    'enterprise-solutions'=>'enterprise-solutions',
//                    'seo'=>[
//                        'view'=>'seo',
//                        'name'=>'SEO'
//                    ]
//                ]
//            ],
//            'mobile-development'=>[
//                'view'=>'mobile-development',
//                'pages'=>[
////                'mobile-development'=>'mobile-development',
//                    'ios-development'=>'ios-development',
//                    'android-development'=>'android-development',
//                    'mobile-game-development'=>'mobile-game-development',
//                    'porting'=>'porting',
//                    'mobile-app-promotion'=>'mobile-app-promotion',
//                    'post-release'=>'post-release'
//                ]
//            ],
//            'outsourcing'=>[
//                'view'=>'outsourcing',
//                'pages'=>[
//                    'outsourcing-development'=>'outsourcing-development',
//                    'outsourcing-management'=>'outsourcing-management',
//                    /*  'outstaff-services'=>'outstaff-services'*/
//                ]
//            ],
//            'design'=>[
//                'view'=>'design',
//                'pages'=>[
//                    'web-design-services'=>'web-design-services',
//                    'mobile-design'=>'mobile-design',
//                    'ui-ux-design'=>[
//                        'view'=>'ui-ux-design',
//                        'name'=>'UI/UX Design'
//                    ]
//                ]
//            ],
//            'qa-testing'=>[
//                'view'=>'qa-testing',
//                'name'=>'QA, Testing',
//                'pages'=>[
//                    'black-box-testing'=>'black-box-testing',
//                    'white-box-testing'=>'white-box-testing',
//                    'gray-box-testing'=>'gray-box-testing',
//                    'unit-and-integration-testing'=>'unit-and-integration-testing',
//                    'usability-testing'=>'usability-testing',
//                    'ab-testing'=>[
//                        'view' => 'ab-testing',
//                        'name' => 'A/B Testing'
//                    ]
//                ]
//            ],
//            'ongoing-tech-support'=>[
//                'view'=>'ongoing-tech-support',
//                'pages'=>[
//                    'post-release-consulting'=>'post-release-consulting',
//                    'customer-support-team'=>'customer-support-team',
//                    'post-implementation-debrief'=>'post-implementation-debrief',
//                    'customer-community'=>'customer-community'
//                ]
//            ],
//            'security-and-compliance'=>[
//                'view'=>'security-and-compliance',
//                'pages'=>[
//                    'internet-security'=>'internet-security',
//                    'pci-dss-compliance'=>'pci-dss-compliance',
//                    'hipaa-hitech-compliance'=>[
//                        'view' => 'hipaa-hitech-compliance',
//                        'name' => 'Hipaa & hitech compliance',
//                    ],
//                    'cobit-compliance'=>'cobit-compliance'
//                ]
//            ],
//            'cloud-computing'=>[
//                'view'=>'cloud-computing',
//                'pages'=>[
//                    'advantages-cloud-computing'=>'advantages-cloud-computing',
//                    'iaas'=>[
//                        'view' => 'iaas',
//                        'name' => 'IaaS',
//                    ],
//                    'paas'=>[
//                        'view' => 'paas',
//                        'name' => 'PaaS',
//                    ],
//                    'saas'=>[
//                        'view' => 'saas',
//                        'name' => 'SaaS',
//                    ]
//                ]
//            ],
//            'ecommerce-cms'=>[
//                'view'=>'ecommerce-cms',
//                'pages'=>[
//                    'shopify-development'=>'shopify-development',
//                    'bigcommerce-development'=>'bigcommerce-development',
//                    'shopping-cart-development'=>'shopping-cart-development',
//                    'wordpress-development'=>'wordpress-development',
//                    'joomla-development'=>'joomla-development',
//                    'opencart-development'=>'opencart-development'
//                ]
//            ],
//            'wearable-tech'=>[
//                'view'=>'wearable-tech',
//                'pages'=>[
//                    'personal-and-business-solutions'=>'personal-and-business-solutions',
//                    'fitness-sports'=>[
//                        'view'=>'fitness-sports',
//                        'name'=>'Fitness & sports'],
//                    'smartwatch'=>'smartwatch',
//                    'smartglasses'=>'smartglasses',
//                    'augmented-reality'=>'augmented-reality',
//                    'wearable-future'=>'wearable-future',
//                    'health-medicine'=> [
//                        'view'=>'health-medicine',
//                        'name'=>'Health & medicine'
//                    ],
//                ]
//            ],
//            'ibeacon-software'=>[
//                'view'=>'ibeacon-software',
//                'name'=>'iBeacon Software',
//                'pages'=>[
//                    'personal-business-use'=>'personal-business-use',
//                    'bluetooth-low-energy'=>'bluetooth-low-energy',
//                    'ibeacon-advantages'=>[
//                        'view'=>'ibeacon-advantages',
//                        'name'=>'iBeacon advantages'
//                    ],
//                ]
//            ],
//            'three-d-vr-expertise'=>[
//                'view'=>'three-d-vr-expertise',
//                'name'=>'3D, VR expertise',
//                'pages'=>[
//                    'industry'=>'industry',
//                    'augmented-reality'=>'augmented-reality',
//                    'three-d-gaming'=>[
//                        'view'=>'three-d-gaming',
//                        'name'=>'3D and Virtual Reality'
//                    ],
//                    'unity-game-engine'=>'unity-game-engine'
//                ]
//            ],
//        ];
//
//        foreach ($array as $id=>$item)
//        {
//            $record = new ServicesCategory();
//            $record->name = isset($item['name']) ? $item['name'] : ucfirst(str_replace('-',' ',$id));
//            $record->url = $id;
//            $record->save();
//        }
//    }

    function actionParseService()
    {
//                $array = [
//            'web-development'=>[
//                'view'=>'web-development',
//                /// seo name => view
//                'pages'=>[
//                    'industry'=>'industry',
//                    'our-way-of-development'=>'our-way-of-development',
//                    'development-sequence'=>'development-sequence',
//                    'databank'=>'databank',
//                    'cms'=>[
//                        'view'=>'cms',
//                        'name'=>'CMS'
//                    ],
//                    'responsive'=>'responsive',
//                    'enterprise-solutions'=>'enterprise-solutions',
//                    'seo'=>[
//                        'view'=>'seo',
//                        'name'=>'SEO'
//                    ]
//                ]
//            ],
//            'mobile-development'=>[
//                'view'=>'mobile-development',
//                'pages'=>[
////                'mobile-development'=>'mobile-development',
//                    'ios-development'=>'ios-development',
//                    'android-development'=>'android-development',
//                    'mobile-game-development'=>'mobile-game-development',
//                    'porting'=>'porting',
//                    'mobile-app-promotion'=>'mobile-app-promotion',
//                    'post-release'=>'post-release'
//                ]
//            ],
//            'outsourcing'=>[
//                'view'=>'outsourcing',
//                'pages'=>[
//                    'outsourcing-development'=>'outsourcing-development',
//                    'outsourcing-management'=>'outsourcing-management',
//                    /*  'outstaff-services'=>'outstaff-services'*/
//                ]
//            ],
//            'design'=>[
//                'view'=>'design',
//                'pages'=>[
//                    'web-design-services'=>'web-design-services',
//                    'mobile-design'=>'mobile-design',
//                    'ui-ux-design'=>[
//                        'view'=>'ui-ux-design',
//                        'name'=>'UI/UX Design'
//                    ]
//                ]
//            ],
//            'qa-testing'=>[
//                'view'=>'qa-testing',
//                'name'=>'QA, Testing',
//                'pages'=>[
//                    'black-box-testing'=>'black-box-testing',
//                    'white-box-testing'=>'white-box-testing',
//                    'gray-box-testing'=>'gray-box-testing',
//                    'unit-and-integration-testing'=>'unit-and-integration-testing',
//                    'usability-testing'=>'usability-testing',
//                    'ab-testing'=>[
//                        'view' => 'ab-testing',
//                        'name' => 'A/B Testing'
//                    ]
//                ]
//            ],
//            'ongoing-tech-support'=>[
//                'view'=>'ongoing-tech-support',
//                'pages'=>[
//                    'post-release-consulting'=>'post-release-consulting',
//                    'customer-support-team'=>'customer-support-team',
//                    'post-implementation-debrief'=>'post-implementation-debrief',
//                    'customer-community'=>'customer-community'
//                ]
//            ],
//            'security-and-compliance'=>[
//                'view'=>'security-and-compliance',
//                'pages'=>[
//                    'internet-security'=>'internet-security',
//                    'pci-dss-compliance'=>'pci-dss-compliance',
//                    'hipaa-hitech-compliance'=>[
//                        'view' => 'hipaa-hitech-compliance',
//                        'name' => 'Hipaa & hitech compliance',
//                    ],
//                    'cobit-compliance'=>'cobit-compliance'
//                ]
//            ],
//            'cloud-computing'=>[
//                'view'=>'cloud-computing',
//                'pages'=>[
//                    'advantages-cloud-computing'=>'advantages-cloud-computing',
//                    'iaas'=>[
//                        'view' => 'iaas',
//                        'name' => 'IaaS',
//                    ],
//                    'paas'=>[
//                        'view' => 'paas',
//                        'name' => 'PaaS',
//                    ],
//                    'saas'=>[
//                        'view' => 'saas',
//                        'name' => 'SaaS',
//                    ]
//                ]
//            ],
//            'ecommerce-cms'=>[
//                'view'=>'ecommerce-cms',
//                'pages'=>[
//                    'shopify-development'=>'shopify-development',
//                    'bigcommerce-development'=>'bigcommerce-development',
//                    'shopping-cart-development'=>'shopping-cart-development',
//                    'wordpress-development'=>'wordpress-development',
//                    'joomla-development'=>'joomla-development',
//                    'opencart-development'=>'opencart-development'
//                ]
//            ],
//            'wearable-tech'=>[
//                'view'=>'wearable-tech',
//                'pages'=>[
//                    'personal-and-business-solutions'=>'personal-and-business-solutions',
//                    'fitness-sports'=>[
//                        'view'=>'fitness-sports',
//                        'name'=>'Fitness & sports'],
//                    'smartwatch'=>'smartwatch',
//                    'smartglasses'=>'smartglasses',
//                    'augmented-reality'=>'augmented-reality',
//                    'wearable-future'=>'wearable-future',
//                    'health-medicine'=> [
//                        'view'=>'health-medicine',
//                        'name'=>'Health & medicine'
//                    ],
//                ]
//            ],
//            'ibeacon-software'=>[
//                'view'=>'ibeacon-software',
//                'name'=>'iBeacon Software',
//                'pages'=>[
//                    'personal-business-use'=>'personal-business-use',
//                    'bluetooth-low-energy'=>'bluetooth-low-energy',
//                    'ibeacon-advantages'=>[
//                        'view'=>'ibeacon-advantages',
//                        'name'=>'iBeacon advantages'
//                    ],
//                ]
//            ],
//            'three-d-vr-expertise'=>[
//                'view'=>'three-d-vr-expertise',
//                'name'=>'3D, VR expertise',
//                'pages'=>[
//                    'industry'=>'industry',
//                    'augmented-reality'=>'augmented-reality',
//                    'three-d-gaming'=>[
//                        'view'=>'three-d-gaming',
//                        'name'=>'3D and Virtual Reality'
//                    ],
//                    'unity-game-engine'=>'unity-game-engine'
//                ]
//            ],
//        ];
//        foreach ($array as $id=>$item)
//        {
//            $div_class="content";
//            $category_id = ServicesCategory::find()->where(['name'=>isset($item['name']) ? $item['name'] : ucfirst(str_replace('-',' ',$id))])->one()->id;
//            $html = file_get_contents('https://lab3m.com/services/'.$id);
//
//
//            $service = new Services();
//            $service->category_id = $category_id;
//            preg_match('/<title>(.*)<\/title>/isU',$html,$out);
//            $out = str_replace('<title>','',$out[0]);
//            $out = str_replace('</title>','',$out);
//            $service->title = $out;
//            $service->name = isset($item['name']) ? $item['name'] : ucfirst(str_replace('-',' ',$id));
//
//            preg_match('/<div\ class\="'.$div_class.'"\>(.*)\<div\ class\=\"panel-group hidden-xs hidden-sm\" id\="accordion\" role="tablist\" aria-multiselectable\="true\">/isU',$html,$out);
//
//           $service->content = $out[1];
//            preg_match('/<meta\ name\="description" content\=\"(.*)\"\>/isU',$html,$out);
//            $service->meta_desc = $out[1];
//            $service->seo_url = $id;
//            $service->status = Services::SERVICE_ACTIVE;
//            $service->save();
//
//            foreach ($item['pages'] as $sub_id =>$sub_service)
//            {
//                $html = file_get_contents('https://lab3m.com/services/'.$id.'/'.$sub_id);
//                $service = new Services();
//                $service->category_id = $category_id;
//                preg_match('/<title>(.*)<\/title>/isU',$html,$out);
//                $out = str_replace('<title>','',$out[0]);
//                $out = str_replace('</title>','',$out);
//                $service->title = $out;
//                $service->name = isset($sub_service['name']) ? $sub_service['name'] : ucfirst(str_replace('-',' ',$sub_id));
//
//                preg_match('/<div\ class\="'.$div_class.'"\>(.*)\<div\ class\=\"panel-group hidden-xs hidden-sm\" id\=\"accordion\" role="tablist\" aria-multiselectable\=\"true\">/isU',$html,$out);
//
//                $service->content = $out[1];
//                preg_match('/<meta\ name\="description" content\=\"(.*)\"\>/isU',$html,$out);
//                $service->meta_desc = $out[1];
//                $service->seo_url = $sub_id;
//                $service->status = Services::SERVICE_ACTIVE;
//                $service->save();
//            }
//            echo 'done';
//        }
    }
}