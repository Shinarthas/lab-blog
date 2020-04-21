<?php
/**
 * Created by PhpStorm.
 * User: lenovo 1
 * Date: 15.11.2016
 * Time: 14:03
 */

namespace backend\controllers;

use common\models\Img;
use Yii;
use common\models\UploadImgFilesForm;
use yii\base\Controller;
use yii\helpers\ArrayHelper;
use yii\web\UploadedFile;


class ImgController extends Controller
{

    public function actionIndex()
    {

    }

    public function actionAjaxUploadFiles()
    {
        Yii::$app->response->format = 'json';

        if(Yii::$app->request->isAjax )
        {

            $model = new UploadImgFilesForm();

            if (Yii::$app->request->isPost) {
                $model->imageFiles = UploadedFile::getInstances($model, 'imageFiles');

                $result = $model->upload();
                if ($result) {
                    // file is uploaded successfully
                    return [
                        'status' => 200,
                        'links'=>$result
                    ];
                }else{
                    return [
                        'status'=>500,
                        'message'=>$model->errors
                    ];
                }
            }else{
                return [
                    'status'=>500,
                    'message'=>'is not post query'
                ];
            }
        }else{
            return [
                'status'=>500,
                'message'=>'is not ajax'
            ];
        }
    }

    public function actionAjaxGetSmallImgList()
    {
        Yii::$app->response->format = 'json';

        //   if(Yii::$app->request->isAjax ) {
        $images = Img::find()->orderBy(['id' => SORT_DESC])->limit(100)->where(['>','date_create',strtotime("2020-01-01")])->all();
        $result = [];

        foreach ($images as $image)
        {
            if((time()-86400)<$image->date_create) {
                $class='load-today';
            }else{
                $class ='';
            }

            //$imageSizes = Img::getCachedImgPostSize($image->img_width,$image->img_height);

            $result[] =[
                'link'=>Yii::getAlias('@front').'/'.Yii::$app->ImageComponent->getCacheImage($image->name,$image->dir,Img::IMG_CACHE_PREV_WIDTH,Img::IMG_CACHE_PREV_HEIGHT),
                'class'=>$class,
                'link_post'=>Yii::getAlias('@front').'/'.Yii::$app->ImageComponent->getCacheImage($image->name,$image->dir,Img::IMG_CACHE_INNER_POST_WIDTH,Img::IMG_CACHE_INNER_POST_HEIGHT,true),
            ];
        }

        return $result;
        //  }
    }
}