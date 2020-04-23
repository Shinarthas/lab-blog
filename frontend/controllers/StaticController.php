<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Lang;

class StaticController extends Controller
{
    public $lang;

    public function actionCookie(){
        return $this->render('cookie');
    }
    public function actionPrivacy(){
        return $this->render('privacy');
    }
    public function actionTerms(){
        return $this->render('terms');
    }
}

