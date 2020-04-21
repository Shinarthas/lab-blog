<?php
/**
 * Created by PhpStorm.
 * User: lenovo 1
 * Date: 15.11.2016
 * Time: 15:02
 */

namespace common\models;

use Yii;
use yii\base\Model;
use common\models\Img;
use yii\imagine\Image;

class UploadImgFilesForm extends Model
{
    public $imageFiles;

    public function rules()
    {
        return [
            [['imageFiles'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg,gif', 'maxFiles' => 10],
        ];
    }


    public function upload()
    {
        if ($this->validate()) {

            $private_dir = Yii::$app->ImageComponent->getPrivateDir();

            $files_link = [];

            foreach ($this->imageFiles as $file) {

                $uid = uniqid(time(),true);
                $name_saved =  $uid.$file->baseName.'.'.$file->extension;
                $name_dir = Yii::$app->ImageComponent->getCurrentDir();
                if($file->saveAs($private_dir.DIRECTORY_SEPARATOR.$name_saved)){
                    echo "Aaa";
                    list($width, $height, $type, $attr) = getimagesize($private_dir.DIRECTORY_SEPARATOR.$name_saved);

                    $model = new Img();
                    $model->name = $name_saved;
                    $model->dir = $name_dir;

                    $model->img_width = $width;
                    $model->img_height = $height;

                    $files_link [] =Yii::getAlias('@front').'/'.Yii::$app->ImageComponent->getCacheImage($model->name,$model->dir,Img::IMG_CACHE_PREV_WIDTH,Img::IMG_CACHE_PREV_HEIGHT);

                    $model->save();
                }
            }
            return $files_link;
        } else {
            return false;
        }
    }
}