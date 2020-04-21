<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 06.12.2016
 * Time: 17:23
 */

namespace backend\controllers;


use yii\web\Controller;

class SettingsController extends Controller
{
    public function behaviors() {
        return [
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['viewAdminPage']
                    ],
                ],
            ],
        ];
    }

    public function actionIndex()
    {

        return $this->render('index');
    }
}