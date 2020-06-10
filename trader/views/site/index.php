<?php

/* @var $this yii\web\View */

$this->title = 'Main';
?>
<div class="site-index">
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
