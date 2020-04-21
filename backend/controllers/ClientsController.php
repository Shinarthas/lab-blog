<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 07.12.2016
 * Time: 16:56
 */

namespace backend\controllers;

use Yii;
use common\models\ClientEmail;
use yii\web\Controller;
use yii\data\Pagination;
use KendoAdapter\KendoDataProvider;
use KendoAdapter\KendoFiltersCollection;
use common\models\Client;

class ClientsController extends Controller
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
        $query = ClientEmail::find()->orderBy(['id'=>SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 50]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();


        return $this->render('index', [
            'models' => $models,
            'pages' => $pages,
        ]);
    }

    public function actionHide()
    {
        if(isset($_GET['id']))
        {
            $id = intval($_GET['id']);
            $model = ClientEmail::findOne($id);
            $model->status = ClientEmail::STATUS_OLD;
            $model->update();
            $this->redirect('/clients/');
        }
    }
	
	public function actionSales()
	{
		 if (Yii::$app->request->isAjax) {
			Yii::$app->response->format = 'json';

			$filters = Yii::$app->request->get('filter');
			
			$filtersCollection = $filters ? new KendoFiltersCollection($filters) : null;
					
			$query = Client::find()->orderBy("id DESC");			
	
			
			$provider = new KendoDataProvider([
					'query' => $query]);
					

			return [
				'data' => call_user_func(function($models) {
					/* @var $models Order[] */
					$result = [];

					for ($i = 0; $i < count($models); $i++) {
					
						$result[] = [
							'id' => $models[$i]->id,
							'name' => $models[$i]->name,
							'description' => $models[$i]->description,
							'contact_name' => $models[$i]->contact_name,
							'from_where' => $models[$i]->from_where,
							'account_to_contact' => $models[$i]->account_to_contact,
							'link_to_contact' => $models[$i]->link_to_contact,
							'site' => $models[$i]->site,
							'phone' => $models[$i]->phone,
							'skype' => $models[$i]->skype,
							'email' => $models[$i]->email,
							'comment' => $models[$i]->comment,
							'category_id' => $models[$i]->category_id,
							'status' => $models[$i]->status,
							'created_at' => date("Y-m-d H:i",$models[$i]->created_at),
							'est_budget' => $models[$i]->est_budget,
							'description' => $models[$i]->description
						];
					}

					return $result;
				}, $provider->getModels()),
				'total' =>  $query->count()
			];
		}
		
		return $this->render('sales');
	}
	
	public function actionEdit()
	{
		if(!$client = Client::findOne($_GET['id']))
		{
			$client = new Client();
			$client->created_at = time();
			$client->est_budget = 100;
		}
			
		if(isset($_POST['save']))
		{
			$client->load($_POST);
			$client->save();
			
			return $this->redirect('/clients/sales');
		}
		
		return $this->render('edit-client', ['client'=>$client]);
	}
}