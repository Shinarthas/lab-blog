<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'Our Customer Support Team is available to answer all of your issues and queries. You are welcome to address us with any questions, doubts or concerns. Our experts will be happy to find a workable solution for you and help you solve all the arising issues. We are always glad to consult you about your project, help you enhance your ideas and choose the most suitable technologies and features.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Customer support team</h2>
            <p>Our Customer Support Team is available to answer all of your issues and queries. You are welcome to address us with any questions, doubts or concerns. Our experts will be happy to find a workable solution for you and help you solve all the arising issues. We are always glad to consult you about your project, help you enhance your ideas and choose the most suitable technologies and features.</p>
            <p>At Thunderrise we have a Customer Support Team that will be glad to answer all your questions. Our professionals  are happy to find a best solution for your queries and help you solve all the problems. All you need is to consult us about your project to receive all information you need. Our team awaits.</p>
            <?= $this->render('//layouts/_estimate') ?>
            <p>We provide the following types of customer support:</p>
            <ul>
              <li>onsite support</li>
              <li>remote support through email</li>
              <li>support via skype of telephone</li>
            </ul>
            <p>Just drop us a line, and we’ll get in touch with you immediately.</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>