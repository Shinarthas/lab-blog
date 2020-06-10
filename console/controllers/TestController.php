<?php

namespace console\controllers;

use api\v1\renders\ResponseRender;
use app\models\Bot;
use ccxt\okex3;
use common\assets\CoinMarketCapApi;
use common\components\BinanceExchange;
use common\components\HitbtcExchange;
use common\components\OkexExchange;
use common\components\PoloniexExchange;
use common\models\AccBalance;
use common\models\Account;
use common\models\AccountBalance;
use common\models\Currency;
use common\models\Forecast;
use common\models\ForecastStatistics;
use common\models\Market;
use common\models\Order;
use common\models\OrderList;
use common\models\PairRating;
use common\models\Strategy;
use common\models\TokenPairs;
use console\models\TokenTransfer;
use common\models\Proxy;
use yii\console\Controller;
use Yii;
use console\models\Task;
use yii\helpers\ArrayHelper;
use common\models\GlobalPair;
function random_float($min, $max) {
    return random_int($min, $max - 1) + (random_int(0, PHP_INT_MAX - 1) / PHP_INT_MAX );
}
class TestController extends MainConsoleController
{
    public function actionTest(){
        $this->globalpair();
    }

    public function actionStrategy(){
        $st_names=["smart"=>"UA-2001","auto"=>"UA-2002"];

        $str=Strategy::find()->orderBy('created_at desc')->limit(1)->one();
        $time=time();
        if(empty($str)){
            foreach ($st_names as $at_name=>$account_name){
                $s=new Strategy();
                $s->name=$at_name;
                $s->profit=0;
                $s->balance=100000;
                $s->accounts=1;
                $s->data=json_encode(['orders'=>0]);
                $s->created_at=date("Y-m-d H:i:s",$time);

                $s->save();

                $ab=new AccountBalance();
                $ab->account_id=$account_name;
                $ab->timestamp=date("Y-m-d H:i:s",$time);
                $ab->total_margin=$s->balance*0.998;;
                $ab->save();

                print_r($s->errors);
                print_r($ab->errors);
            }
        }else{
            foreach ($st_names as $at_name=>$account_name){
                $cur_str=Strategy::find()->orderBy('created_at desc')->andWhere(['name'=>$at_name])->limit(1)->one();
                print_r(ArrayHelper::toArray($cur_str));
                $percent_rating=floatval(random_float(-2,4))/1000+1;

                $s=new Strategy();
                $s->name=$at_name;
                ECHO $percent_rating;
                $s->balance=!empty($cur_str)?$cur_str->balance*$percent_rating:100000;
                $s->profit+=!empty($cur_str)?$s->balance-$cur_str->balance:0;
                $s->accounts=1;
                $tmp_data=json_decode($cur_str->data,true);
                $s->data=json_encode(['orders'=>$tmp_data['orders']+rand(1,3)]);
                $s->created_at=date("Y-m-d H:i:s",$time);

                $s->save();


                $ab=new AccountBalance();
                $ab->account_id=$account_name;
                $ab->timestamp=date("Y-m-d H:i:s",$time);
                $ab->total_margin=$s->balance*0.998;
                $ab->save();
            }
        }
    }

    private function globalpair(){
        $list=["BTC"=>9738.58,"ETH"=>243.07,"XRP"=>0.20135,"DASH"=>77.71,"BCH"=>253.43,"LTC"=>45.83];

        $ts=GlobalPair::find()->orderBy('created_at desc')->limit(1)->one();
        $aq_r=[];
        if(!empty($ts)){

            $aq=GlobalPair::find()->where(['created_at'=>$ts->created_at])->all();
            foreach ($aq as $a){
                $aq_r[$a->currency]=$a;
            }
        }

        $time=time();

        foreach ($list as $l=>$initial_rate){
            if(empty($aq_r[$l])){
                echo "empty";
                $global_pair=new GlobalPair();
                $global_pair->currency=$l;
                $global_pair->trading_pair=$l."USDT";
                $global_pair->bid=$initial_rate;
                $global_pair->ask=$initial_rate*0.998;
                $global_pair->created_at=date("Y-m-d H:i:s",$time);
                $global_pair->rating=100;

                $global_pair->save();
            }else{
                echo "full";
                $percent_rate=random_float(-1,1)/100+1;
                $percent_rating=random_float(-1,1)/100;

                $global_pair=new GlobalPair();
                $global_pair->currency=$l;
                $global_pair->trading_pair=$l."USDT";
                $global_pair->bid=$aq_r[$l]->bid*$percent_rate;
                $global_pair->ask=$global_pair->bid*0.998;
                $global_pair->created_at=date("Y-m-d H:i:s",$time);
                $global_pair->rating=intval($aq_r[$l]->rating+100*$percent_rating);
                if($global_pair->rating>100)
                    $global_pair->rating=100;
                if($global_pair->rating<0)
                    $global_pair->rating=0;

                $global_pair->save();
            }
        }
    }
}
