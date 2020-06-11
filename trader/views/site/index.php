<?php
use common\models\Order;
/* @var $this yii\web\View */

$this->title = 'Main';
?>
<style>
        .content-trade-sidebar {
            background-color: #18191D!important;
            position: fixed;
            width: 3.75rem;
            overflow: visible;
            height: 100%;
            z-index: 99;
        }
        
        .content-trade-body {
            background: #222328;
            min-height: 1100px;
            margin-left: 3.75rem;
            z-index: 0;
        }
        
        .content-trade-sidebar-block {
            width: 100%;
            height: 3.75rem;
            padding: 15px;
            transition: .1s;
        }
        
        .content-trade-sidebar-block:hover {
            width: calc(100% + 5px);
            background: #6727FD;
            padding-right: 20px;
            border-radius: 0 5px 5px 0;
            transition: .1s;
        }
        
        .content-trade-sidebar-block img {
            filter: invert(1);
            width: 100%;
        }
        
        .content-trade-sidebar-block-bottom {
            position: absolute;
            bottom: 0;
        }
        
        .content-trade-sidebar-block-center {
            width: 100%;
            height: fit-content;
            position: absolute;
            top: 0;
            bottom: 0;
            margin: auto 0;
        }
        
        .card {
            margin-bottom: 1.875rem;
            background: rgb(34, 35, 40);
            transition: all .5s ease-in-out;
            position: relative;
            border: 1px solid rgba(0, 0, 0, .15);
            z-index: 0;
            color: white;
            border-radius: 10px;
            overflow: hidden;
        }
        
        .card-body {
            padding: 1.5rem;
            background: #2E2D32;
        }
        
        .progress {
            height: 6px;
            overflow: visible;
            font-size: .65625rem;
            background-color: #e9ecef;
            border-radius: .25rem;
        }
        
        h4 {
            font-size: 18px;
        }
        
        h3 {
            font-size: 24px;
        }
        
        .card-title {
            font-size: 16px;
            font-weight: 700;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: .05em;
            margin-bottom: 0;
        }
        
        .card-action .dropdown {
            float: left;
            width: 30px;
            height: 30px;
            border-radius: 5px;
            border-color: transparent;
            text-align: center;
            margin-right: 12px;
            position: relative;
            display: inline-block;
            background: #000;
            color: #5e1084;
        }
        
        .card-action>a {
            display: inline-block;
            width: 30px;
            height: 30px;
            line-height: 30px;
            border-radius: 5px;
            border-color: transparent;
            text-align: center;
            background: #000;
            color: #fff;
            margin-right: 8px;
        }
        
        #balance_graph {
            height: 260px;
        }
        .table thead th {
            border-bottom-width: 1px;
            text-transform: uppercase;
            color: #b0b0b0;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .5px;
            border-color: rgba(0,0,0,.15);
            border-top: none!important;
        }
        .table tbody tr td {
            vertical-align: middle;
            border-color: rgba(0,0,0,.15);
        }
        ::-webkit-scrollbar {
            width: 7px;
            height: 7px;
		}
		/* Track */

		::-webkit-scrollbar-track {
		    background: #292929;
		    /*border:1px solid rgb(34,34,34);*/
		    border-bottom: none;
		    border-top: none;
		}
		/* Handle */

		::-webkit-scrollbar-thumb {
		    background: #888;
		    border-radius: 5px;
		}
		/* Handle on hover */

		::-webkit-scrollbar-thumb:hover {
		    background: #555;
		    transition: .1s;
		}
    </style>
<div class="content-trade">
        <div class="content-trade-sidebar">
            <div class="content-trade-sidebar-block">
                <img src="/images/person.svg" alt="block1">
            </div>
            <div class="content-trade-sidebar-block-center">
                <div class="content-trade-sidebar-block">
                    <img src="/images/statistics.svg" alt="block1">
                </div>
                <div class="content-trade-sidebar-block">
                    <img src="/images/statistics.svg" alt="block1">
                </div>
                <div class="content-trade-sidebar-block">
                    <img src="/images/statistics.svg" alt="block1">
                </div>
            </div>
            <div class="content-trade-sidebar-block content-trade-sidebar-block-bottom">
                <img src="/images/settings.svg" alt="block1">
            </div>
        </div>
        <div class="content-trade-body">
            <div class="row" style="margin: 0; padding: 0; padding-top: 15px;">
                <div class="col-12 col-xl-9">
                    <div class="row">
                        <?php foreach ($pairs as $pair){?>
                                <div class="col-12 col-lg-6">
                                    <div class="card stat-widget-one bg-btc">
                                        <div class="card-body">
                                            <div class="row justify-content-between">
                                                <div class="col-auto">
                                                    <h4 class="mb-3"><?php echo end($pair)->currency?></h4>

                                                    <h3 class="mb-3"><span class="counter"><?php echo end($pair)->bid?></span> <?php echo end($pair)->currency?></h3>
                                                </div>
                                                <div class="col-auto">
                                                    <img src="/images/bitcoin.svg" alt="BTC" style="width: 50px;filter: invert(1);">
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <span class="badge text-success">
                                                    <i class="mdi mdi-arrow-up-bold"></i> 2.50 % 
                                                </span>
                                                <span> Since last month</span>
                                            </div>

                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: <?php echo end($pair)->rating?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php } ?>
                        
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-xxl-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <h4 class="card-title">Balance</h4>
                                    <div class="card-action">

                                        <div class="dropdown d-inline-block">
                                            <a class="btn" href="#" role="button" data-display="static" data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-settings"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" data-action="reload"><span class="mdi mdi-refresh"></span></a>
                                        <a href="javascript:void(0)" data-action="expand"><i class="mdi mdi-arrow-expand-all"></i></a>

                                    </div>
                                </div>
                                <div class="card-body collapse show" style="">
                                    <div class="chart-wrapper">
                                        <h3><strong><span class="counter"><?php echo end(array_values($strategies)[0])->balance ?> USD <?php echo end(array_values($strategies)[1])->balance ?></span> USD</strong></h3>
                                        <canvas id="myChart"></canvas>
                                        
                                        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
                                        <script>
                                            var ctx = document.getElementById('myChart').getContext('2d');
                                            var chart = new Chart(ctx, {
                                                // The type of chart we want to create
                                                type: 'line',

                                                // The data for our dataset
                                                data: {
                                                    labels: [<?php foreach (array_values($strategies)[0] as $str_time){?>
                                                                <?php echo "'", $str_time->created_at, "'",","?>
                                                            <?php } ?>],
                                                    datasets: [{
                                                        label: 'smart',
                                                        borderColor: 'rgb(255, 99, 132)',
                                                        data: [<?php foreach (array_values($strategies)[0] as $str_time){?>
                                                                    <?php echo ' ', $str_time->balance, ','?>
                                                                <?php } ?>]
                                                    },{
                                                        label: 'auto',
                                                        borderColor: 'rgb(255, 255, 132)',
                                                        data: [<?php foreach (array_values($strategies)[1] as $str_time){?>
                                                                    <?php echo ' ', $str_time->balance, ','?>
                                                                <?php } ?>]
                                                    }]
                                                },
                                                //backgroundColor: 'rgb(255, 99, 132)',
                                                // Configuration options go here
                                                options: {}
                                            });
                                        </script>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="card stat-widget-one bg-btc">
                                <div class="card-body">
                                <h4 class="card-title">Last Orders:</h4>
                                    <div style="    height: 500px; overflow-y: auto;">
                                    <table class="table" style="width: 100%; margin-bottom: 0;">
                                    <thead>
                                        <tr>
                                            <th>Pairs</th>
                                            <th>Status</th>
                                            <th>Rate</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <style>
                                        .sell-0{
                                            color: green;
                                        }
                                        .sell-1{
                                            color: red;
                                        }
                                    </style>
                                    <?php foreach ($orders as $order){?>
                                        <tr>
                                        <!-- <?php echo Order::$statuses[$order->status]?> -->
                                            <td><?php echo $order->currency_one?>/<?php echo $order->currency_two?></h4></td>
                                            <td class="sell-<?php echo $order->sell?>">
                                                <?php
                                                if($order->sell){
                                                    echo "Sell";
                                                }
                                                else{
                                                    echo "Buy";
                                                }
                                                ?>
                                            </td>
                                            <td id="pr-<?php echo $order->id?>"></td>
                                            <script>
                                                var x =<?php echo $order->rate?>;
                                                document.getElementById("pr-<?php echo $order->id?>").innerHTML = x.toFixed(2);
                                            </script>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



<div class="site-index" style="margin-left: 3.75rem">
    <h1>Accounts</h1>
<pre>
<?php print_r(\yii\helpers\ArrayHelper::toArray($accounts)); ?>
</pre>
    <h1>Orders</h1>
<pre>
<?php print_r(\yii\helpers\ArrayHelper::toArray($orders)); ?>
</pre>
    <h1>Strategies</h1>
<pre>
<?php print_r(\yii\helpers\ArrayHelper::toArray($strategies)); ?>
</pre>
    <h1>Pairs</h1>
<pre>
<?php print_r(\yii\helpers\ArrayHelper::toArray($pairs)); ?>
</pre>
</div>
