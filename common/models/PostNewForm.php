<?php
/**
 * Created by PhpStorm.
 * User: lenovo 1
 * Date: 09.11.2016
 * Time: 14:13
 */

namespace common\models;
use Yii;
use yii\base\Model;
use yii\helpers\Url;

class PostNewForm extends Model
{

    public $title;
    public $h1;
    public $content;
    public $content_preview;
    public $meta_desc;
    public $seo_url;
    public $author_id;
    public $date_published;
    public $imageFile;
    public $status;

    public $imagePath;
    public $imageNameSaved;

    public $category;
    public $related_post;

    public $_image;
    public $_category;
    public $_related_post;
	
	public $status_second;
	public $link_images;
	public $link_additional;
	public $link_guest_blog;
	public $comment;
	public $unique_percent;
	public $smm_1;
	public $smm_2;
	public $smm_3;
	public $smm_4;
	public $hashtag;

    public function rules()
    {
        return [
            [['title','h1','content','content_preview','meta_desc','author_id','date_published','category','related_post'], 'required'],
            ['title','string','max'=>70],
            ['h1','string','max'=>70],
            [['seo_url','link_images','link_additional','link_guest_blog','comment','hashtag'], 'string'],
            ['content','string'],
            ['content_preview','string'],
            ['meta_desc','string', 'min'=>50,'max'=>160],
            ['author_id','integer'],
            [['status','status_second','unique_percent','smm_1','smm_2','smm_3','smm_4'],'integer'],
            ['seo_url','validateSeoUrl'],
            ['date_published', 'date', 'message' => '{attribute}: Не валидная дата!', 'format' => 'php:'.Post::POST_PHP_DATE_FORMAT],
            [['imageFile'],'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, gif, apng'],
            //[['video'],'file', 'skipOnEmpty' => true,],
            ['imageFile', 'required', 'when' => function($model) {
                if($model->status == Post::POST_ACTIVE && empty($this->_image))
                {
                    return true;
                }else{
                    return false;
                }
            }, 'whenClient' => "function (attribute, value) {
                    if($('#postnewform-status').val() == '".Post::POST_ACTIVE."' && $('#postnewform-status').val() == '')
                    {
                        return true;
                    }else{
                        return false;
                    }
                }"
            ],
            ['category','validateCategoryArray'],
            ['related_post','validateRelated']
        ];
    }

    public function attributeLabels()
    {
        return [
            'h1'=>'Мета тайтл',
            'title' => 'Название статьи',
            'content' => 'Тело статьи',
            'content_preview' => 'Превью статьи (в списке)',
            'meta_desc' => 'Мета описание для статьи',
            'imageFile' => 'Изображение',
            //'video' => 'Видео',
            'author_id' => 'Автор',
            'date_published' => 'Дата публикации',
            'status' => 'Статус',
            'category'=>'Категории'
        ];
    }

    public function imageUpload()
    {

        $private_dir = Yii::$app->ImageComponent->getPrivateDir();

        if ($this->validate()) {

            if(is_object($this->imageFile) && !empty($this->imageFile->baseName))
            {
                $uid = uniqid(time(),true);
                $this->imageNameSaved = $uid.$this->imageFile->baseName.'.' . $this->imageFile->extension;
                $this->imageFile->saveAs($private_dir.DIRECTORY_SEPARATOR.$this->imageNameSaved);
            }
            return true;
        } else {
            return false;
        }
    }
    /*
    public function videoUpload()
    {

        $private_dir = Yii::$app->ImageComponent->getPrivateDir();

        if ($this->validate()) {

            if(is_object($this->video) && !empty($this->imageFile->baseName))
            {
                $uid = uniqid(time(),true);
                $this->imageNameSaved = $uid.$this->imageFile->baseName.'.' . $this->imageFile->extension;
                $this->imageFile->saveAs($private_dir.DIRECTORY_SEPARATOR.$this->imageNameSaved);
            }
            return true;
        } else {
            return false;
        }
    }
*/
    public function validateSeoUrl()
    {

        $result = Post::findSeoUrl($this->seo_url);

        if(!empty($result) && !isset($_GET['id']))
        {
            $this->addError('seo_url', 'Такой seo url уже есть в БД.');
        }
    }

    public function validateSeoUrlForSave($id)
    {
        $result = Post::findSeoUrl($this->seo_url);
        if(!empty($result) && $result['id'] != $id)
        {
            $this->addError('seo_url', 'Такой seo url уже есть, прикреплен  к другому посту.');
            return false;
        }else{
            return true;
        }
    }

    public  function validateCategoryArray(){
        if(!is_array($this->category))
        {
            $this->addError('category', 'Ошибка заполнения Категорий статьи [#0]');
            return false;
        }else {

            if(count($this->category)<0){
                $this->addError('category', 'Статья должна пренадлежать хотя бы к 1 категории');
            }
            unset($this->category[0]);
            foreach ($this->category as $category)
            {

                if(intval($category)<1){
                    $this->addError('category', 'Ошибка заполнения Категорий статьи[#1]');
                    return false;
                }
            }
            return true;
        }
    }

    public function validateRelated(){
       // print_r($this->related_post); exit;
        if(!is_array($this->related_post)){
            $this->addError('related_post', 'Ошибка заполнения связанных статей [#0]');
            return false;
        }else {
            unset($this->related_post[0]);
            if(count($this->related_post)<0){
                $this->addError('related_post', 'Должно быть 3 связанных статьи');
                return false;
            }else{

                return true;
            }
        }
    }


}