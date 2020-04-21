<?php
/**
 * Created by PhpStorm.
 * User: lenovo 1
 * Date: 21.11.2016
 * Time: 17:16
 */

namespace backend\controllers;


use yii\web\Controller;
use common\models\Contacts;
use yii\data\Pagination;
use Yii;


class ContactsController extends Controller
{
	public function beforeAction($action)
	{
		$this->enableCsrfValidation = false;

		return parent::beforeAction($action);
	}

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
        $query = Contacts::find()->where(['status'=>Contacts::$contacts_available])->orderBy(['id'=>SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 10]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();


        return $this->render('index', [
            'models' => $models,
            'pages' => $pages,
        ]);
    }

	public function actionView($id)
	{
		$contact = Contacts::find()->where(['id'=>$id])->with(['history', 'movement', 'lastMovement'])->one();
		if(isset($_POST['reply']))
		{
			$contact->reply = $_POST['reply'];
			$contact->save();
		}
		
		return $this->render("view", ['contact'=>$contact]);
	}
	
    public function actionHide()
    {
        if(isset($_GET['id']))
        {
            $id = intval($_GET['id']);
            $model = Contacts::findOne($id);
            $model->status = Contacts::CONTACTS_HIDDEN;
            $model->update();
            $this->redirect('/contacts/');
        }
    }

    public function actionChangeStatus()
    {
        if(Yii::$app->request->isAjax && Yii::$app->request->isPost && !empty(Yii::$app->request->post('id')))
        {
            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            $id = intval(Yii::$app->request->post('id'));
            $status = intval(Yii::$app->request->post('status'));
            Contacts::changeStatus($id,$status);
            return ['ok'];
        }
    }
}