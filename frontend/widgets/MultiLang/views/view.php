<?php
namespace frontend\widgets\MultiLang;
use yii\helpers\Html;
use Yii;
?>

<div style="padding: 0.375rem 0.75rem;" class="btn-group header-cor1 sdsd">
    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding: 5px 17px 8px 17px; font-size: 18px!important;background: black;border: 1px solid white !important;">
        <?= Yii::$app->language; ?>
    </button>

    <div class="dropdown-menu dropdown-menu-left" style="background: black; padding:0px;text-align: center;">
        <?= Html::a('English', array_merge(
            [preg_replace('|^\/.{2}\/{0,1}|isU','/',\Yii::$app->request->url), 'language' => 'en']
        ), ['class' => 'decor1']); ?>
        <?= Html::a('Русский', array_merge(
            [preg_replace('|^\/.{2}\/{0,1}|isU','/',\Yii::$app->request->url), 'language' => 'ru']
        ), ['class' => 'decor1']); ?>
    </div>
    <style>
        .decor1{
            display: block; padding: 6px;
            /* border-bottom: 1px solid #6927ff; */
        }
        .decor1:hover{
            background-color: #151515!important;
        }
        @media(max-width: 767px){
            .sdsd{
            display: block !important;
        }
        }
        .dropdown-toggle:hover>.dropdown-menu {
  display: block!important;
}
        .dropdown-menu-left a{
            color:white;
        }
        .dropdown-item.active{
            background-color: #5a5a5a!important;
        }
        .dropdown-item:hover{
            background-color: #5a5a5a!important;
        }
        .btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active, .show>.btn-secondary.dropdown-toggle {
            border: none!important;
        }
        @media (max-width: 991px){
            .header-cor1{
                padding-right: 29px!important;
                margin-right: 15px;
            }
        }
    </style>
</div>