<?php
/**
 * Created by PhpStorm.
 * User: lenovo 1
 * Date: 15.11.2016
 * Time: 13:59
 */

namespace backend\controllers;

use common\models\Lang;
use common\models\PostCategory;
use common\models\PostRedirects;
use common\models\PostRelated;
use common\models\PostToCategory;
use common\models\PostTranslationForm;
use common\models\PostTranslations;
use yii\web\Controller;
use common\models\Post;
use common\models\PostNewForm;
use Yii;
use yii\data\Pagination;
use yii\web\UploadedFile;


class BlogController extends Controller
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

    }

    public function actionPostEdit()
    {
        $request = Yii::$app->request;
        $id = (int) $request->get('id');
        $query = Post::findOne($id);

        $model = new PostNewForm();
        if(!empty($query))
        {

            $category = PostToCategory::find()
                ->where([PostToCategory::tableName().'.id_post'=>$id])
                ->joinWith('category')
                ->all();


            $postCategory = [];
            foreach ($category as $cat_item)
            {
                $postToCategory[] = [
                    'id'=>$cat_item->id_category,
                    'name'=>$cat_item->category->name
                ];
            }

            $related = PostRelated::find()
                ->select([Post::tableName().'.title',PostRelated::tableName().'.id_post_related'])
                ->where([PostRelated::tableName().'.id_post'=>$id])
                ->joinWith('post')
                ->all();

            $postRelated = [];
            foreach ($related as $rel_item){
                $postRelated[] = [
                    'id'=>$rel_item->id_post_related,
                    'name'=>$rel_item->post->title
                ];
            }

            $model->title = $query->title;
            $model->h1 = $query->h1;
            $model->content = $query->content;
            $model->content_preview = $query->content_preview;
            $model->meta_desc = $query->meta_desc;
            $model->seo_url = $query->seo_url;
            $model->date_published = date(Post::POST_PHP_DATE_FORMAT, $query->date_published);
            $model->author_id = $query->author_id;
            $model->status= $query->status;
            $model->imageFile = $query->background;
            $model->imagePath = $query->background_path;
            $model->_image = $query->background;
            $model->_category = isset($postToCategory) ? $postToCategory : '';
            $model->_related_post = isset($postRelated) ? $postRelated : '';
			
			 $model->status_second = $query->status_second;
			 $model->link_images = $query->link_images;
			 $model->link_additional = $query->link_additional;
			 $model->link_guest_blog = $query->link_guest_blog;
			 $model->comment = $query->comment;
			 $model->unique_percent = $query->unique_percent;
			 $model->smm_1 = $query->smm_1;
			 $model->smm_2 = $query->smm_2;
			 $model->smm_3 = $query->smm_3;
			 $model->smm_4 = $query->smm_4;
			 $model->hashtag = $query->hashtag;

        }

        if($model->load(Yii::$app->request->post()))
        {
            if(empty($model->imageFile)) {
                $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            }
            //print_r($_POST);exit;
            if($model->imageUpload() && $model->validateSeoUrlForSave($query->id))
            {
                $post = $query;
                $post->title = $model->title;
                $post->h1 = $model->h1;
                $post->content = $model->content;
                $post->content_preview = $model->content_preview;
                $post->meta_desc = $model->meta_desc;
                $post->seo_url = $model->seo_url;
                $post->author_id = $model->author_id;
                $parsed_date = date_parse_from_format(Post::POST_PHP_DATE_FORMAT, $model->date_published);
                $post->date_published = mktime(
                    $parsed_date['hour'],
                    $parsed_date['minute'],
                    $parsed_date['second'],
                    $parsed_date['month'],
                    $parsed_date['day'],
                    $parsed_date['year']
                );
                $post->status = $model->status =='' ? 0 : $model->status;
				$post->status_second = $model->status_second;
				
				 $post->link_images = $model->link_images;
				 $post->link_additional = $model->link_additional;
				 $post->link_guest_blog = $model->link_guest_blog;
				 $post->comment = $model->comment;
				 $post->unique_percent = $model->unique_percent;
				 $post->smm_1 = $model->smm_1;
				 $post->smm_2 = $model->smm_2;
				 $post->smm_3 = $model->smm_3;
				 $post->smm_4 = $model->smm_4;
				 $post->hashtag = $model->hashtag;

                PostToCategory::clearPostToCategory($post->id);
                foreach ($model->category as $category)
                {
                    $postToCategory = new PostToCategory();
                    $postToCategory->id_post = $post->id;
                    $postToCategory->id_category = $category;
                    $postToCategory->save();
                }

                PostRelated::clearPostRelated($post->id);
                foreach ($model->related_post as $related){
                    $postRelatedModel = new PostRelated();
                    $postRelatedModel->id_post = $post->id;
                    $postRelatedModel->id_post_related = $related;
                    $postRelatedModel->save();
                }

                if(is_object($model->imageFile)) {
                    $post->background = $model->imageNameSaved;
                    $post->background_path = Yii::$app->ImageComponent->getCurrentDir();
                }
                $post->update();

                $parsed_url = parse_url(Yii::$app->request->referrer);
                $query_array = [];


                if(isset($_POST['page_query']) && intval($_POST['page_query'])>0){
                    $this->redirect('/blog/post-list?page='.intval($_POST['page_query']));
                }else{
                    $this->redirect('/blog/post-list');
                }

            }else{
                $model->addError('imageFile','Проблема с сохранением изображения');
            }
        }

        return $this->render('post-edit',['model'=>$model]);
    }

    public function actionPostList()
    {
        $lang_list = Lang::find()->where(['lang_default'=>0])->all();
        //print_r($lang_list); exit;
        $query = Post::find()->orderBy([Post::tableName().'.id'=>SORT_DESC])->joinWith('translations');
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 10]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();


        return $this->render('post-list', [
            'models' => $models,
            'pages' => $pages,
            'lang'=>$lang_list,
        ]);
    }

    public function actionPostNew()
    {
        $model = new PostNewForm();

        if($model->load(Yii::$app->request->post()))
        {
            if(empty($model->imageFile)) {
                $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            }
            if($model->imageUpload())
            {
                $post = new Post();
                $post->title = $model->title;
                $post->h1 = $model->h1;
                $post->content = $model->content;
                $post->content_preview = $model->content_preview;
                $post->meta_desc = $model->meta_desc;
                $post->seo_url = $model->seo_url;
                $post->author_id = $model->author_id;
                $post->status = $model->status =='' ? 0 : $model->status;
				$post->status_second = (int)$model->status_second;
				$post->link_images = ''.$model->link_images;
				 $post->link_additional = ''.$model->link_additional;
				 $post->link_guest_blog = ''.$model->link_guest_blog;
				 $post->comment = ''.$model->comment;
				 $post->unique_percent = (int)$model->unique_percent;
				 $post->smm_1 = (int)$model->smm_1;
				 $post->smm_2 = (int)$model->smm_2;
				 $post->smm_3 = (int)$model->smm_3;
				 $post->smm_4 = (int)$model->smm_4;
				 $post->hashtag = ''.$model->hashtag;
				 
                $parsed_date = date_parse_from_format(Post::POST_PHP_DATE_FORMAT, $model->date_published);
                $post->date_published = mktime(
                    $parsed_date['hour'],
                    $parsed_date['minute'],
                    $parsed_date['second'],
                    $parsed_date['month'],
                    $parsed_date['day'],
                    $parsed_date['year']
                );



                $post->background =  $model->imageNameSaved;
                $post->background_path = Yii::$app->ImageComponent->getCurrentDir();
                $post->save();

                PostToCategory::clearPostToCategory($post->id);
                foreach ($model->category as $category)
                {
                    $postToCategory = new PostToCategory();
                    $postToCategory->id_post = $post->id;
                    $postToCategory->id_category = $category;
                    $postToCategory->save();
                }

                PostRelated::clearPostRelated($post->id);
                foreach ($model->related_post as $related){
                    $postRelatedModel = new PostRelated();
                    $postRelatedModel->id_post = $post->id;
                    $postRelatedModel->id_post_related = $related;
                    $postRelatedModel->save();
                }

                $this->redirect('/blog/post-list');

            }else{
                $model->addError('imageFile','Проблема с сохранением изображения');
            }
        }

        return $this->render('post-new',['model'=>$model]);
    }

    public function actionGetSeoPostUrl()
    {
        if(Yii::$app->request->isAjax && strip_tags(Yii::$app->request->get('url')) == Yii::$app->request->get('url'))
        {
            Yii::$app->response->format = 'json';
            $request = Yii::$app->request;
            $seoUrl = strip_tags($request->get('url'));

            $stringLow = strtolower($seoUrl);
            $stringLow = trim($stringLow);
            $stringLow = preg_replace("/\s{2,}/",' ',$stringLow);
            $result_url =  str_replace(" ", "-", $stringLow);
            $result_url = str_replace("--",'-',$result_url);

            return [
                'status'=>200,
                'value' => $result_url
            ];
        }
    }

    public function actionSaveProgress()
    {
        Yii::$app->response->format = 'json';

        if(Yii::$app->request->isAjax)
        {
           $array = Yii::$app->request->post('PostNewForm');
           $time = time();
           $local_dir = Yii::getAlias('@frontend').'/web/cache/temp_'.$array['seo_url'].'.txt';
           $data = serialize($array);

           file_put_contents($local_dir,$data);

           return [
               'status'=>200,
               'time'=>$time
           ];
        }
    }

    public function actionPostTranslation()
    {
        $model =  new PostTranslationForm();
        $post_id = intval($_GET['post_id']);
        $model->post_id = $post_id;
        $lang_id = intval(isset($_GET['lang_id'])?$_GET['lang_id']:1);

        $original_post = Post::findOne($post_id);

        if(!empty($lang_id) && $lang_id>0) {$model_lang = Lang::findOne($lang_id);} else { $model_lang = Lang::getDefaultLang(); }

       // echo '{'.print_r($model_lang).'}'; exit;

        if($post_id>0 && empty($model->title)) {$post = PostTranslations::find()->where(['id_post'=>$post_id,'id_lang'=>$lang_id])->one(); }

        if(!empty($post))
        {
            $model->title = $post->title;
            $model->h1 = $post->h1;
            $model->content = $post->content;
            $model->content_preview = $post->content_preview;
            $model->meta_desc = $post->meta_desc;
        }

        if($model->load($_POST) && $model->validate())
        {
            $modelTranslation  = PostTranslations::find()->where(['id_post'=>$post_id,'id_lang'=>$lang_id])->one();
            if(empty($modelTranslation)){
                $modelTranslation = new PostTranslations();
            }
            if(empty($model->imageFile)) {
                $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            }
            $model->imageUpload();
            if(true){
                $modelTranslation->title = $model->title;
                $modelTranslation->h1 = $model->h1;
                $modelTranslation->content = $model->content;
                $modelTranslation->content_preview = $model->content_preview;
                $modelTranslation->meta_desc = $model->meta_desc;
                $modelTranslation->id_post = $post_id;
                $modelTranslation->id_lang = $lang_id;
                $modelTranslation->background = $model->imageNameSaved;
                $modelTranslation->background_path = Yii::$app->ImageComponent->getCurrentDir();

                $modelTranslation->save();

            }

            $this->redirect('/blog/post-list');
        }

        return $this->render('post-translation',['model_lang'=>$model_lang,'model'=>$model,'original_post'=>$original_post]);
    }

    public function actionGetAutoCompleteCategory()
    {
            Yii::$app->response->format = 'json';
            $find_string =strip_tags(Yii::$app->request->post('search'));
            $model = PostCategory::find()->where(PostCategory::tableName().'.name  LIKE "%'.$find_string.'%"')->limit(5)->orderBy(['id'=>SORT_DESC])->all();
            if(!empty($model))
            {
                $result =[];
                foreach ($model as $item)
                {
                    $result[$item->id]=$item->name;
                }
                return [
                    'status'=>200,
                    'data'=>$result
                ];
            }else{
                return [
                    'status'=>404,
                ];
            }

    }

    public function actionGetAutoCompleteRelatedPost()
    {
        Yii::$app->response->format = 'json';
        $find_string =strip_tags(Yii::$app->request->post('search'));
        $model = Post::find()->select(['id','title'])->where(Post::tableName().'.title  LIKE "%'.$find_string.'%"')->limit(5)->orderBy(['id'=>SORT_DESC])->all();
        if(!empty($model))
        {
            $result =[];
            foreach ($model as $item)
            {
                $result[$item->id]=$item->title;
            }
            return [
                'status'=>200,
                'data'=>$result
            ];
        }else{
            return [
                'status'=>404,
            ];
        }
    }



    public function actionTest()
    {
        // echo  Html::img('@front/'.Yii::$app->ImageComponent->getCacheImage('', '',1200,300));
    }

    public function actionPostSearch()
    {
        $search = isset($_GET['search']) ? strip_tags($_GET['search']) : '';
        $bad_search = isset($_GET['search']) ? htmlentities($_GET['search']): '';

        $lang_list = Lang::find()->where(['lang_default'=>0])->all();
        //print_r($lang_list); exit;
        $query = Post::find()->where('LOWER('.Post::tableName().'.title) LIKE "%'.mb_strtolower($search).'%"')->orderBy([Post::tableName().'.id'=>SORT_DESC])->joinWith('translations');
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 10]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();



        return $this->render('post-search', [
            'bad_search'=>$bad_search,
            'search'=>$search,
            'models' => $models,
            'pages' => $pages,
            'lang'=>$lang_list,
        ]);
    }

    public function actionAddPostRedirect()
    {
        $model = new \common\models\PostRedirects();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                $model->save();
                $this->redirect('/blog/post-redirect-list');
            }
        }

        return $this->render('add-post-redirect', [
            'model' => $model,
        ]);
    }

    public function actionPostRedirectList()
    {
        $query = PostRedirects::find()->orderBy([PostRedirects::tableName().'.id'=>SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 10]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();


        return $this->render('post-redirect-list', [
            'models' => $models,
            'pages' => $pages,
        ]);
    }

    public function actionPostRedirectRemove()
    {
        $id = Yii::$app->request->get('id');
        if($id != null){
            PostRedirects::findOne($id)->delete();
            $this->redirect('/blog/post-redirect-list');
        }
    }
	
	public function actionKendoList()
	{
		$posts = Post::find()->with('category')->all();
		
		return $this->render("kendo-list", ['posts'=>$posts]);
	}
}