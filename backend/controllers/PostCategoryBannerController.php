<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 07.02.2017
 * Time: 17:23
 */

namespace backend\controllers;


use Yii;
use common\models\PostCategory;
use yii\web\Controller;
use common\models\PostCategoryBanner;
use common\models\Post;
use yii\data\Pagination;

class PostCategoryBannerController extends Controller
{

    public function actionIndex()
    {

        $query = PostCategory::find();
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 10]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('banner-list',['models'=>$models,'pages'=>$pages]);
    }

    public function actionPostCategoryBanner()
    {
        $model = new \common\models\PostCategoryBannerForm();

        if(isset($_GET['id'])){
            $model->_post = PostCategoryBanner::find()->select([Post::tableName().'.id','name'=>Post::tableName().'.title',PostCategoryBanner::tableName().'.id_post'])->joinWith('postName')->where(['id_category'=>intval($_GET['id'])])->asArray()->all();

        }

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                PostCategoryBanner::deleteAll('id_category = '.$model->id_category);
                foreach ($model->id_post as $id)
                {
                    $post_banner =  new PostCategoryBanner();
                    $post_banner->id_category = $model->id_category;
                    $post_banner->id_post = $id;
                    $post_banner->save();
                }
                $this->redirect('/post-category-banner');
            }
        }

        return $this->render('post-category-banner', [
            'model' => $model,
        ]);
    }

    public function actionGetAutoCompleteBanner()
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

}