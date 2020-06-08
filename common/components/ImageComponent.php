<?php

/**
 * Created by PhpStorm.
 * User: lenovo 1
 * Date: 14.11.2016
 * Time: 17:21
 */

namespace common\components;
use common\models\Post;
use Yii;
use yii\base\Component;
use yii\imagine\Image;
use Imagine\Gd;
use Imagine\Image\Box;
use Imagine\Image\BoxInterface;


class ImageComponent extends Component
{

    const PRIVATE_DIR_FLAG = 0;
    const PUBLIC_DIR_FLAG = 1;
    private $privateFileDir = '';
    private $publicCacheDir = '';

    public function init()
    {
        parent::init(); // Call parent implementation;
        $this->privateFileDir = Yii::getAlias('@common') .'/private_files/image/';
        $this->publicCacheDir = Yii::getAlias('@frontend') .'/web/cache/img/';

        if(!file_exists(Yii::getAlias('@common').'/private_files/'))
        {
            mkdir(Yii::getAlias('@common') .'/private_files/');
            mkdir(Yii::getAlias('@common') .'/private_files/image');
        }

        if(!file_exists(Yii::getAlias('@frontend').'/web/cache/'))
        {
            mkdir(Yii::getAlias('@frontend') .'/web/cache/');
            mkdir(Yii::getAlias('@frontend') .'/web/cache/img/');
        }

    }

    public function getCacheImage($image,$dir,$width = 450,$height = 450,$noCrop = false)
    { 
        if($this->checkDir($this->privateFileDir.$dir.'/'.$image))
        {
            if(empty($image))
            {
                $image = 'placeholder.jpg';
                $dir='';
            }

            if(!$this->checkDir($this->publicCacheDir.$dir))
            {
                $this->createDir($dir,self::PUBLIC_DIR_FLAG);
            }
                if(!$this->checkDir($this->publicCacheDir.$dir.'/'.$width.'x'.$height.'_'.$image))
                {

                    if(strpos($image,'.gif')!==false || strpos($image,'.apng')!==false){

                        copy($this->privateFileDir.$dir.'/'.$image, $this->publicCacheDir.$dir.'/'.$width.'x'.$height.'_'.$image);

                    }else{

                        if($noCrop){
                            Image::getImagine()->open($this->privateFileDir.$dir.'/'.$image)->thumbnail(new Box($width, $height))->save($this->publicCacheDir.$dir.'/'.$width.'x'.$height.'_'.$image);
                        }else{
                            // echo $this->publicCacheDir.$dir.'/'.$width.'x'.$height.'_'.$image;
                            Image::thumbnail($this->privateFileDir.$dir.'/'.$image, $width, $height)
                                ->save(Yii::getAlias($this->publicCacheDir.$dir.'/'.$width.'x'.$height.'_'.$image));
                        }
                    }


                }

            return 'cache/img/'.$dir.'/'.$width.'x'.$height.'_'.$image;
        }else{

            $image = 'placeholder.jpg';
            $dir='';

            Image::thumbnail($this->privateFileDir.$dir.'/'.$image, $width, $height)
                ->save(Yii::getAlias($this->publicCacheDir.$dir.'/'.$width.'x'.$height.'_'.$image), ['quality' => 90]);

            return 'cache/img'.$dir.'/'.$width.'x'.$height.'_'.$image;

        }
    }

    public function getPrivateDir()
    {
        $dir = $this->getCurrentDir();
        if(!$this->checkDir($this->privateFileDir.$dir))
        {
            $this->createDir($dir,self::PRIVATE_DIR_FLAG);
        }
        return $this->privateFileDir.$dir;
    }
    public function checkDir($dir)
    {
        if(file_exists($dir))
        {
            return true;
        }else{
            return false;
        }
    }
    public function createDir($dir,$dir_flag = self::PRIVATE_DIR_FLAG)
    {
        $dir_array = explode('/',$dir);
        $root_dir = '';
        if($dir_flag == self::PRIVATE_DIR_FLAG)
        {
            $root_dir = $this->privateFileDir;
        }elseif($dir_flag == self::PUBLIC_DIR_FLAG)
        {
            $root_dir = $this->publicCacheDir;
        }
        $proc_dir ="";
        foreach ($dir_array as $dir)
        {
            if(!$this->checkDir($root_dir.$proc_dir.$dir))
            {
                mkdir($root_dir.$proc_dir.$dir);
            }
            $proc_dir.=$dir.'/';
        }
    }
    public function getCurrentDir()
    {
        return ''.date('Y').'/'.date('m').'/'.date('d');
    }
}