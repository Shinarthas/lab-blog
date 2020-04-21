<?php
$this->title = ucfirst(Yii::$app->controller->id);

$this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'Thunderrise is a company of highly qualified specialists in app development sphere which will offer you an outclassed service through all stages of app development process. Not to take your precious time we’ll be succinct. Our advantages are:']);
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
            <p>434545434Thunderrise is a company of highly qualified specialists in app development sphere which will offer you an outclassed service through all stages of app development process. Not to take your precious time we’ll be succinct. Our advantages are:</p>
            <ul>
              <li>entire project lifecycle maintenance;</li>
              <li>Android and iOs mobile platforms;</li>
              <li>native and cross-platform app development;</li>
              <li>complexity is not an issue;</li>
              <li>rich experience in various field of app development;</li>
              <li>end-to-end principle implementation;</li>
              <li>3D, 2D and Virtual reality design experience;</li>
              <li>app porting;</li>
              <li>mobile web development;</li>
              <li>24/7 accessible thoughtful service;</li>
              <li>SEO, SMM and other auxiliary services.</li>
            </ul>
            <?= $this->render('//layouts/_estimate') ?>
            <p>Anyone can endlessly talk about advantages of ones skills. We are not a team of words, we’re a team of deeds. We invite you to take our humble offer for cooperation convince yourself that we stand up to our scarce words by our eloquent doings.</p>
          </div>
<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>

</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>