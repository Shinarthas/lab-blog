<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 13.12.2016
 * Time: 13:56
 */

namespace common\models;


use yii\base\Model;
use Yii;

use yii\helpers\Url;

class PostTranslationForm extends Model
{
    public $post_id;
    public $h1;
    public $title;
    public $meta_desc;
    public $content_preview;
    public $content;
    public $imageFile;

    public $imagePath;
    public $imageNameSaved;

    public $_image;
    public $link_images;

    public function rules()
    {
        return [
            [['title', 'meta_desc', 'content_preview','content','post_id','h1'], 'required'],
            ['post_id','integer'],
            ['title', 'string'],
            ['h1', 'string','max'=>255],
            ['title', 'string'],
            ['meta_desc', 'string'],
            [['imageFile'],'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],
            ['content_preview', 'string'],
            ['content', 'string'],
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
}