<?php
namespace frontend\controllers;

use common\models\Lang;
use common\models\Post;
use common\models\PostCategory;
use common\models\PostCategoryBanner;
use common\models\PostRelated;
use common\models\PostSearchForm;
use common\models\PostToCategory;
use common\models\PostTranslations;
use common\models\PostRedirects;
use common\models\ServicesCategory;
use Yii;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use frontend\models\BlogPost;
use yii\data\Pagination;
use yii\web\NotFoundHttpException;
use yii\web\UrlManager;
use yii\helpers\Url;


class BlogController extends Controller
{

    public $lang;

    public function behaviors()
    {
        return [
            /*[
                'class' => 'yii\filters\HttpCache',
                'cacheControlHeader'=>'public, max-age=3600',
                'sessionCacheLimiter' => 'public',
                'lastModified' => function ($action, $params) {
                    if($action->id == 'index')
                    {
                        return time();
                    }else if($action->id == 'show-post'){
                        $url = strip_tags(Yii::$app->request->get('id'));
                        $post = Post::find()
                            ->select('date_update')
                            ->where(['seo_url'=>$url])
                            ->andWhere(['status'=>Post::POST_ACTIVE])
                            ->one();
                        return $post ? $post->date_update : time();
                    }
                },
            ],*/
        ];
    }

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

    // public function actionNews1(){
    //     echo 'die';die();
    //     return $this->render('news1');
    // }

    public function actionIndex()
    {

        if(!isset($_GET['category']) && isset($_GET['page']) && $_GET['page'] == 1)
        {
            $this->redirect(($this->lang->lang_default != 1 ? '/'.$this->lang->url : '' ).'/blog',301);
        }

        $categoryes = PostCategory::find()->all();
        if(isset($_GET['category']))
        {
            $select_category = preg_replace("|\-|"," ",strip_tags($_GET['category']));
            $select_category = PostCategory::find()->where(['name'=>$select_category])->one();
        }
        if(Yii::$app->language=='en'){
            if(isset($select_category) && !empty($select_category)){
                //die();
                $model = Post::find()
                    ->select([Post::tableName().'.content_preview',Post::tableName().'.date_create',Post::tableName().'.seo_url',Post::tableName().'.background',Post::tableName().'.background_path',Post::tableName().'.title'])
                    ->where(['status'=>Post::POST_ACTIVE])
                    ->andWhere(Post::tableName().'.date_published < '.time())
                    ->orderBy([Post::tableName().'.date_published'=>SORT_DESC])
                    //->joinWith('category-name')
                    ->andWhere([PostToCategory::tableName().'.id_category'=>$select_category->id]);
            }else{
             $model = Post::find()
                ->select([Post::tableName().'.content_preview',Post::tableName().'.date_create',Post::tableName().'.seo_url',Post::tableName().'.background',Post::tableName().'.background_path',Post::tableName().'.title'])
                ->where(['status'=>Post::POST_ACTIVE])
                ->andWhere(Post::tableName().'.date_published < '.time())
				//->joinWith('category-name')
                ->orderBy([Post::tableName().'.date_published'=>SORT_DESC]);
            }

        }else{

            if(isset($select_category) && !empty($select_category)) {
                $model = Post::find()
                    ->select([
                           // Post::tableName() . '.content_preview',
                            Post::tableName() . '.seo_url',
                            Post::tableName() . '.background',
                            Post::tableName() . '.background_path',
                            //Post::tableName() . '.title',
                            't.id',
                            't.id_post',
                            't.h1',
                            't.title',
                            't.meta_desc',
                            't.content',
                            't.content_preview',
                            't.date_create',
                            't.date_update',
                            't.background as background2',
                            't.background_path as background_path2',
                        ]
                    )
                    ->where(['status' => Post::POST_ACTIVE])
                    ->andWhere(Post::tableName() . '.date_published < ' . time())
                    ->joinWith(['translation t', 'category'])
                    ->andWhere(['t.id_lang' => Yii::$app->params['languages'][Yii::$app->language]])
                    ->andWhere([PostToCategory::tableName() . '.id_category' => $select_category->id])
                    ->orderBy([Post::tableName() . '.date_published' => SORT_DESC]);
            }else{
                $model = Post::find()
                    ->select([
                          //  Post::tableName() . '.content_preview',
                            Post::tableName() . '.seo_url',
                            Post::tableName() . '.background',
                            Post::tableName() . '.background_path',
                            //Post::tableName() . '.title',
                            't.id',
                            't.id_post',
                            't.h1',
                            't.title',
                            't.meta_desc',
                            't.content',
                            't.content_preview',
                            't.date_create',
                            't.date_update',
                            't.background as background2',
                            't.background_path as background_path2',
                        ]
                    )
                    ->where(['status' => Post::POST_ACTIVE])
                    ->andWhere(Post::tableName() . '.date_published < ' . time())
                    ->joinWith(['translation t', 'category'])
                    ->andWhere(['t.id_lang' => Yii::$app->params['languages'][Yii::$app->language]])
                    ->orderBy([Post::tableName() . '.date_published' => SORT_DESC]);
            }
        }



        $countQuery = clone $model;

        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 20]);
        $pages->pageSizeParam = false;
        $pages->pageParam = 'page';
        $pages->urlManager = Yii::$app->urlManager;
        $models = $model
			//->andWhere(['!=',PostToCategory::tableName() . '.id_category', 20])
			->offset($pages->offset) 
            ->limit($pages->limit)
            ->asArray()
            ->all();

        $models=json_decode(json_encode($models));


        if(isset($select_category) && !empty($select_category))
        {
            $banners = PostCategoryBanner::find()
                ->where([PostCategoryBanner::tableName().'.id_category'=>$select_category->id])
                ->joinWith('postInfo')
                ->asArray()
                ->all();
           // print_r($banners);exit;
			if (Yii::$app->request->isAjax) 
				return $this->renderPartial('_index',['models'=>$models,'pages' => $pages,'lang'=>$this->lang,'categoryes'=>$categoryes,'select_category'=>$select_category,'banners'=>$banners]);
			else
				return $this->render('index',['models'=>$models,'pages' => $pages,'lang'=>$this->lang,'categoryes'=>$categoryes,'select_category'=>$select_category,'banners'=>$banners]);
        }else{
			if (Yii::$app->request->isAjax) 
				return $this->renderPartial('_index',['models'=>$models,'pages' => $pages,'lang'=>$this->lang,'categoryes'=>$categoryes]);
			else
				return $this->render('index',['models'=>$models,'pages' => $pages,'lang'=>$this->lang,'categoryes'=>$categoryes]);
        }

    }

    public function actionPost()
    {
        return $this->redirect('/404', 301);

        $id = Yii::$app->request->get('id');
        $post = BlogPost::find()->where(['id' => $id])->limit(1)->one();

        return $this->render('post', [
            'post' => $post
        ]);
    }

    public function actionPostSearch()
    {
        $search = isset($_GET['search']) ? strip_tags($_GET['search']) : '';
        $bad_search = isset($_GET['search']) ? htmlentities($_GET['search']): '';

        if(isset($_GET['category']))
        {
            $select_category = strip_tags($_GET['category']);
            $select_category = PostCategory::find()->where(['name'=>$select_category])->one();
        }

        if($this->lang->lang_default == 1){

                $model = Post::find()
                    ->select([Post::tableName().'.content_preview',Post::tableName().'.seo_url',Post::tableName().'.background',Post::tableName().'.background_path',Post::tableName().'.title'])
                    ->where(['status'=>Post::POST_ACTIVE])
                    ->andWhere(Post::tableName().'.date_published < '.time())
                    ->orderBy([Post::tableName().'.date_published'=>SORT_DESC]);

            $model->andWhere('LOWER('.Post::tableName().'.title) LIKE "%'.mb_strtolower($search).'%"');


        }else{

            $model = Post::find()
                ->select([
                        //  Post::tableName() . '.content_preview',
                        Post::tableName() . '.seo_url',
                        Post::tableName() . '.background',
                        Post::tableName() . '.background_path',
                        //Post::tableName() . '.title',
                        't.*'
                    ]
                )
                ->where(['status' => Post::POST_ACTIVE])
                ->andWhere(Post::tableName() . '.date_published < ' . time())
                ->joinWith('translation t')
                ->andWhere(['t.id_lang' => Yii::$app->params['languages'][Yii::$app->language]])
                ->orderBy([Post::tableName() . '.date_published' => SORT_DESC]);

            $model->andWhere('LOWER(t.title) LIKE "%'.mb_strtolower($search).'%"');

        }

        //print_r($lang_list); exit;
      //  $query = Post::find()->where('LOWER('.Post::tableName().'.title) LIKE "%'.mb_strtolower($search).'%"')->orderBy([Post::tableName().'.id'=>SORT_DESC])->joinWith('translations');
        $query = $model;
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 6]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

		if (Yii::$app->request->isAjax)
			return $this->renderPartial('_index', [
				'bad_search'=>$bad_search,
				'search'=>$search,
				'lang'=>$this->lang,
				'models' => $models,
				'pages' => $pages,
				'categoryes'=>$categoryes = PostCategory::find()->all()

			]);
		else
			return $this->render('post-search', [
				'bad_search'=>$bad_search,
				'search'=>$search,
				'lang'=>$this->lang,
				'models' => $models,
				'pages' => $pages,
				'categoryes'=>$categoryes = PostCategory::find()->all()

			]);
    }


    public function actionShowPost()
    {

        $current_url =  Url::to();
        $redirectUrls =  PostRedirects::find()->all();
        foreach ($redirectUrls as $redirectUrl)
        {
            $cuted_url = str_replace('https://lab3m.com','',$redirectUrl->url_from);
            if($current_url == $cuted_url)
            {
                return $this->redirect($redirectUrl->url_too,$redirectUrl->code);

            }
        }
        $service_category=ServicesCategory::findOne(['url'=>Yii::$app->request->get('id')]);
        if(!empty($service_category)) {
            $result = Yii::$app->runAction('services/show-service-category', ['id' => Yii::$app->request->get('id')]);
            return $result;
        }

        if(!empty(Yii::$app->request->get('id')))
        {
            $url = strip_tags(Yii::$app->request->get('id'));
            if($url!==Yii::$app->request->get('id'))
            {
                //return $this->redirect('/404', 301);
            }else{

                if(Yii::$app->language=='en'){
                // валидацию прошли ищем пост
                $model = Post::find()
                    ->where(['seo_url'=>$url])
                    ->andWhere(['status'=>Post::POST_ACTIVE])
                    ->one();
                }else{
                    $model = Post::find()
                        ->where(['seo_url'=>$url])
                        ->andWhere(['status'=>Post::POST_ACTIVE])
                        ->joinWith('translation t')
                        ->andWhere(['t.id_lang'=>Yii::$app->params['languages'][Yii::$app->language]])
                        ->one();


                    $model->title = $model->translation->title;
                    $model->h1 = $model->translation->h1;
                    $model->meta_desc = $model->translation->meta_desc;
                    $model->content = $model->translation->content;
                    $model->content_preview = $model->translation->content_preview;
                    $model->background = $model->translation->background;
                    $model->background_path = $model->translation->background_path;
                }

                if(!empty($model))
                {

                    if($this->lang->lang_default == 1) {
                        $relatedPostModel = PostRelated::find()
                            ->where([PostRelated::tableName() . '.id_post' => $model->id])
                            ->joinWith('post')
                            ->select([
                                PostRelated::tableName() . '.*',
                                Post::tableName() . '.title',
                                Post::tableName() . '.seo_url',
                                Post::tableName() . '.background',
                                Post::tableName() . '.background_path',
                                Post::tableName() . '.content_preview',
                            ])
                            ->all();
                    }else{
                        $relatedPostModel = PostRelated::find()
                            ->where([PostRelated::tableName() . '.id_post' => $model->id])
                            ->select([
                                PostRelated::tableName() . '.*',
                                PostTranslations::tableName() . '.title',
                                Post::tableName() . '.seo_url',
                                Post::tableName() . '.background',
                                Post::tableName() . '.background_path',
                                PostTranslations::tableName() . '.content_preview',
                            ])
                            ->joinWith(['postTranslation'])
                            ->andWhere([PostTranslations::tableName().'.id_lang'=>Yii::$app->params['languages'][Yii::$app->language]])
                            ->all();
                    }

                    if(empty(ArrayHelper::toArray($model)))
                        throw new NotFoundHttpException('Post not found');
                    if($model->content=='')
                        throw new NotFoundHttpException('Post not found');
                    $trans_list = PostTranslations::find()->select(['id_lang'])->where(['id_post'=>$model->id])->asArray()->all();
                    return $this->render('post-show',['model'=>$model,'lang'=>$this->lang,'relatedPosts'=>$relatedPostModel,'trans_list'=>$trans_list]);
                }else{

					$services_data = ServicesController::showDbService(Yii::$app->request->get('id'),$this);
					if(isset($services_data['error']))
					{
						throw new \yii\web\HttpException(404);
					}

					return $this->render('../services/show-service', $services_data);
                }
            }
        }else{
            //return $this->redirect('/404', 301);
        }
    }

    public function actionSearch(){

        if(Yii::$app->request->isAjax && Yii::$app->request->isPost)
        {
            Yii::$app->response->format = 'json';
            $model = new PostSearchForm();
            $model->load(Yii::$app->request->post());
            if($model->validate())
            {
                $results = Post::find()
//                    ->select([
//                        Post::tableName().'.id',
//                        Post::tableName().'.title',
//                        Post::tableName().'.background',
//                        Post::tableName().'.background_path',
//                        Post::tableName().'.content_preview',
//                        PostCategory::tableName().'.name'
//                    ])
                    ->where(Post::tableName().'.title LIKE "%'.$model->search.'%"')
                    ->joinWith('categoryName')
                    ->all();

                if(count($results)!=0)
                {
                    $return = [];

                    foreach ($results as $result)
                    {
                        $return[]= [
                          'id'=>$result->id,
                          'title'=>$result->title,
                          'content_preview'=>$result->content_preview,
                          'background'=>$result->background,
                          'background_path'=>$result->background_path,
                          'category'=>isset($result->categoryName) ? $result->categoryName->category->name : '',
                        ];
                    }

                    return [
                        'status'=>200,
                        'result'=>$return
                    ];

                }else
                    return ['status'=>404];
            }else{

                return [
                    'status'=>403,
                    'result'=>$model->errors
                ];
            }
        }else{
            echo 'Оо';
        }
    }

    public function actionPost1() {
        return $this->render('post1');
    }

    public function actionPost2() {
        return $this->render('post2');
    }

    public function actionPost3() {
        return $this->render('post3');
    }

    public function actionPost4() {
        return $this->render('post4');
    }

    public function actionPost5() {
        return $this->render('post5');
    }

    public function actionPost5redirect() {
        return $this->redirect('/blog/6-steps-to-make-an-app',301);
    }


    public function actionPost6() {
        return $this->render('post6');
    }

    public function actionPost7() {
        return $this->render('post7');
    }

    public function actionPost8() {
        return $this->render('post8');
    }

    public function actionPost9() {
        return $this->render('post9');
    }

    public function actionPost10() {
        return $this->render('post10');
    }

    public function actionPost11() {
        return $this->render('post11');
    }
    public function actionPost12() {
        return $this->render('post12');
    }
}
