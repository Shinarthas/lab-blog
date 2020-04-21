<?php
$this->title = ucfirst(Yii::$app->controller->id);

$this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'We safeguard your private information and guarantee confidentiality of your data with advanced security algorithms.']);
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
                <p>In our security system, we use special algorithms. With the of it, our company can defend your private information and your confidentiality data.</p>
				<p>In this statement we describe different aspect, such us: Internet Security, PCI DSS Compliance, HIPAA & Hitech Compliance, Cobit Compliance.</p>
				<p>This problem is really essential and nowadays, problem of cyber security is important for all sort of people. We think, that web site security logs should be audited on a continuous basis and stored in a secure location</p>
				<?= $this->render('//layouts/_estimate') ?>
				<p>Thunderrise uses modern security arrangement. In our project we interact with powerful defence system. Our <strong>Security Defense Strategy</strong> has two main roads:</p>
				<ul>
					<li>First, you would grantee all of the resources needed to maintain constant alert to new security issues. You would ensure that all patches and updates are done at once!</li>
					<li>Second, use a web scanning applicatons to test your existing equipment and web site code to see if a known sensibilities actually exists. Network and web site sensitivity scanning is the most efficient security investment of all</li>
				</ul>
				<p>Our team provides secure way of development. Thunderrise's project are permanent verified by special applications. Our developers use licensed software and that's why you may rest assured that your project would be developed in right company!</p>
				<p>Thunderrise - follow your dream and let us bring it to life!</p>
          </div>
<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
    
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>