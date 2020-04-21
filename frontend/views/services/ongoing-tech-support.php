<?php
$this->title = ucfirst(Yii::$app->controller->id);

$this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'We never give up projects after release and you can count on further maintenance and updates if you have some fresh ideas.']);
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
            <p>lab3m Development Team provides an ongoing technical support services. Once your project has gone online we will make sure that it stays updated accordingly to your perspective. Just describe us your concept, we will fully accept it and implement each tiny detail so that you stay totally content with the result! Satisfaction of our customers is our greatest value.</p>
			<p>For the sake of that we investigate on your product, target market, best going on tendencies and offer you a set of best suitable features, improvements and tools. Also we continuously monitor your product efficiency, so in case of any error appearance we could immediately react and fix it within the shortest possible time.</p>
			<p>Providing such services nowadays is considered to be challenging, so many companies decide not to offer further maintenance of developed application. But it is no hardship for lab3m Dev Team. We love solving app development and maintenance problems and make things no one ever did. Let us join you in your struggle to the top, so together we could reach it for sure.</p>
			<?= $this->render('//layouts/_estimate') ?>
			<p>We hope our approach will surely catch your fancy. Contact us and let's do great things together!</p>
			<p>For more details please have a look at the following aspects:</p>
			<ul>
				<li>Post Release Consulting</li>
				<li>Customer Support Team</li>
				<li>Post Implementation Debrief</li>
				<li>Customer Community</li>
			</ul>
          </div>
<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
    
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>