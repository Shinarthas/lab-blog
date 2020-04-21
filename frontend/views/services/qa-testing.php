<?php
$this->title = ucfirst(Yii::$app->controller->id);

$this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'Usually QA testing takes the most time in the app development process foremost because our team values the outcome product greatly. Utilizing newest tools, standards and technologies our IT-adepts endeavour to mould it approximately close to perfection.']);
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
            <p>Usually QA testing takes the most time in the app development process foremost because our team values the outcome product greatly. Utilizing newest tools, standards and technologies our IT-adepts endeavour to mould it approximately close to perfection.</p>
            <p>As every member of the lab3m team our QA and testing engineers are highly qualified specialists. To avoid possible pitfalls we established multilevel QA testing during whole cycle of both app and website development; this decision saves the time and money in the long term.</p>
            <?= $this->render('//layouts/_estimate') ?>
            <p>We work in accordance to international quality standards and we’ll make it ascertain that your app meets iTunes and Google Play quality standards. Through testing we detect bugs and errors in the control logics and design while close rapport of our test engineers and programmers allows to promptly rectify all errors.</p>
            <ul>
                <li>Our testing process includes strategies:</li>
                <li>Black-box, White-box and Gray-box testing;</li>
                <li>Unit and Integration testing;</li>
                <li>Usability testing;</li>
                <li>A/B testing, etc.</li>
            </ul>
            <p>lab3m is a perfect match for your your QA testing needs because:</p>
            <ol>
                <li>We are a team of experienced specialists in detecting errors and bugs, fixing them and stabilizing your app or website.</li>
                <li>We provide a full-cycle multilevel QA testing to improve our outcome product.</li>
                <li>We are adherents of a close partnership principle. Our skills in joint with our liability, flexibility and productivity will benefit your business for sure.</li>
            </ol>
            <p>We are always available for you to test us out.</p>
          </div>
<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
    
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>