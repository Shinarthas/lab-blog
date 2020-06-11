<?php

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
                <div class="col-9">
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
                                        <h3><strong><span class="counter">9654150.00</span> USD</strong></h3>
                                        <div id="balance_graph" style="padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1060px; height: 260px;" width="1060" height="260"></canvas>
                                            <div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                                                <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;">
                                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 220px; top: 241px; left: 178px; text-align: center;">OCT 21</div>
                                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 220px; top: 241px; left: 515px; text-align: center;">OCT 22</div>
                                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 220px; top: 241px; left: 683px; text-align: center;">OCT 23</div>
                                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 220px; top: 241px; left: 851px; text-align: center;">OCT 24</div>
                                                </div>
                                                <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;">
                                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 179px; left: 0px; text-align: right;">20K</div>
                                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 134px; left: 0px; text-align: right;">40K</div>
                                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 90px; left: 0px; text-align: right;">60K</div>
                                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 45px; left: 0px; text-align: right;">80K</div>
                                                </div>
                                            </div><canvas class="flot-overlay" width="1060" height="260" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1060px; height: 260px;"></canvas></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="card stat-widget-one bg-btc">
                                <div class="card-body">
                                <h4 class="card-title">Last Orders:</h4>
                                    <table>
                                    <?php foreach ($orders as $order){?>
                                        <tr>
                                            <td><?php echo $order->currency_one?>/<?php echo $order->currency_two?></h4></td>
                                            <td><?php echo $order->status?></td>
                                            <td><?php echo $order->rate?></td>
                                        </tr>
                                    <?php } ?>
                                    </table>
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
