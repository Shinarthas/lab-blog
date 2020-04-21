<?php
/**
 * Created by PhpStorm.
 * User: lenovo 1
 * Date: 08.11.2016
 * Time: 16:37
 */

namespace backend\controllers;


use Yii;
use yii\web\Controller;


class AdminController extends Controller
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
      // echo Yii::$app->security->generatePasswordHash('admin');
       $this->redirect('/blog/post-list');
   }
}