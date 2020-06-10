<?php
namespace trader\controllers;

use common\models\AccountBalance;
use common\models\GlobalPair;
use common\models\Strategy;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $pairs=GlobalPair::find()->select("id,currency,trading_pair,bid,ask,created_at,rating")
            ->where(['>','created_at',date("Y-m-d H:s:s",time()-3600*24*7)])
            ->limit(100)
            ->all();
        $pairs_remapped=[];
        foreach ($pairs as $p){
            $pairs_remapped[$p->currency][strtotime($p->created_at)]=$p;
        }
        $strategies=Strategy::find()->all();
        $strategies_remapped=[];
        foreach ($strategies as $p){
            $strategies_remapped[$p->name][strtotime($p->created_at)]=$p;
        }
        $account_balances=AccountBalance::find()->select("id, account_id, timestamp, total_margin")->all();
        $account_balances_remapped=[];
        foreach ($account_balances as $p){
            $account_balances_remapped[$p->account_id][strtotime($p->timestamp)]=$p;
        }

        return $this->render('index',[
            'pairs'=>$pairs_remapped,
            'strategies'=>$strategies_remapped,
            'accounts'=>$account_balances_remapped,
        ]);
    }
    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
