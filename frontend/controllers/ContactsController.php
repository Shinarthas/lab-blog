<?php
namespace frontend\controllers;

use common\models\ClientEmail;
use common\models\Contacts;
use common\models\UserFormStatistic;
use frontend\models\ContactsForm;
use frontend\models\EmailForm;
use common\models\FileContactsLoadForm;
use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;
use common\models\Lang;

class ContactsController extends Controller
{
    public $lang;

    public function beforeAction($a)
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

        Yii::$app->controller->enableCsrfValidation = false;
        return parent::beforeAction($a);
    }

    public function actionIndex()
    {

        $model = new ContactsForm();
		
        if(Yii::$app->request->post('ContactsForm') && $model->load(Yii::$app->request->post()))
        {
            Yii::$app->response->format = 'json';

            if($model->validate()){

                $contacts = new Contacts();
                $contacts->username = $model->username;
                $contacts->email = $model->email;
                $contacts->reply = $contacts->email;
                $contacts->data_json = json_encode([]);
                $contacts->budget = 50000;
                $contacts->details = $model->details;
                $contacts->status = Contacts::CONTACTS_NEW;

                if($contacts->save())
                {
					$contacts->storeIntoCookie();

                    return [
                        'status'=>200,
						'redirect'=>'/request/'.$contacts->id.'/'.$contacts->key,
                    ];
                }else{
                    return[
                        'status'=>500
                    ];
                }

            }else{
                return ['status'=>404,'error'=>$model->errors];
            }
        }

        return $this->render('index',['model'=>$model,'lang'=>$this->lang]);
    }
	
	public function actionFastContact()
	{
	$data = $_POST;
	if($data['event']!="NOTIFY_END")
		return;
	
		   $contacts = new Contacts();
                $contacts->username = 'phone call';
                $contacts->email = $data['called_did'];
                $contacts->budget = 'Not defined';
                $contacts->details = "when: ".$data['call_start']."<br>from: ".$data['caller_id'].'<br>to: '.$data['called_did'].'<br>duration: '.$data['duration'].'<br>status:'.$data['disposition'];
                $contacts->status = Contacts::CONTACTS_NEW;
				$contacts->save();
		
	}

    public function actionUpload()
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

          $model = new FileContactsLoadForm();
            $model->load(Yii::$app->request->post());
            $file  = UploadedFile::getInstances($model, 'user_file');

            $model->user_file= $file;


            if($model->validate()){
                ini_set('memory_limit', '256M');
                ini_set('upload_max_size', '256M');
                ini_set('post_max_size', '256M');

                $name = $_FILES[0]['name'];
                $name = str_replace(' ', '_', $name);
                $name = mb_strtolower($name);
                $name = time() . '_' . $name;
                copy($_FILES[0]['tmp_name'], 'uploads/contacts/' . $name);

                return [
                'status'=>200
                    ];
            }else{
                return [
                    'status'=>404,
                    'error'=>$model->errors
                ];
            }
    }

    public function actionSaveClientEmail()
    {
        Yii::$app->response->format = 'json';
        if(Yii::$app->request->isAjax)
        {
            $email = new EmailForm();
            $email->email = $_POST['email'];
            if(true)
            {
                $model = new ClientEmail();
                $model->client_email = $email->email;
                $model->client_ip = isset($_SERVER['HTTP_X_REAL_IP']) ? $_SERVER['HTTP_X_REAL_IP'] : '';
                $model->client_data = serialize($_SERVER);
                $model->save();
                return ['status'=>'200'];
            }else{
                return [
                    'status'=>'404',
                    'error'=>$email->errors
                ];
            }
        }
    }

    public function actionSendStatData()
    {


        Yii::$app->response->format = 'json';
        if(Yii::$app->request->isAjax)
        {
            $model = new UserFormStatistic();
            $model->stat_date = serialize($_SERVER);
            $model->status = intval($_POST['status']);
            $model->save();
            return ['status'=>'200'];
        }

    }

    public function actionMail()
    {
        return $this->render('mail');
    }
}
