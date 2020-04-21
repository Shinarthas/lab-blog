<?php
$this->title = ucfirst(Yii::$app->controller->id);

$this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'Thunderrise provides IT-outstaffing services of high quality and assures that even most challenging and complicated projects will be developed in strict accordance with your requirements and within the agreed deadlines.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
    <div class="row">
        <h1><?=$h1?></h1>
    </div>
</div>
<div class="container">
    <div class="row">
          <div class="content">
            <p>Thunderrise Development Team consists of highly qualified experienced specialists. We carefully sorted out our candidates to be sure they can handle tasks  of  different complexity and within reasonable time.</p> 
      			<p>Trust is the base of our Thunderrise Dev Team team that is full of proven and devoted to overall goals and values people. We believe that trustworthy relationship is the key to successful management and effective workflow. </p>
      			<p>In the development process we use most innovative and verified technologies that are considered to be trustworthy by our developers.</p>
            <?= $this->render('//layouts/_estimate') ?>
      			<p>Our Development Team always stays in the process of searching for new interesting projects so we would  be constantly engaged in our working process and could expand the field of our expertise. We strive to establish long term partnership based on mutual understanding, trust and clear vision of our potent collaboration.</p>
      			<p>If you’ve made a decision to outsource app development, considering risks, we assure you that Thunderrise Dev Team is a decent choice that you will not regret making.</p>
      			<p>Consider our cooperation, we look forward to get message from you. Have a nice day!</p>
          </div>
<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
    
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>