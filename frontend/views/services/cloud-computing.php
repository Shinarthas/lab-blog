<?php
$this->title = ucfirst(Yii::$app->controller->id);

$this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'If you develop your own cloud-based system then you, your employees and customers will have remote access to important data.']);
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
            <p>We really care about our clients. Thunderrise develops some its own cloud-based system. This system will improve confidence to our company. In this item we will describe some main tips of Сloud Сomputing: Advantages cloud computing, Iaas, Paas, Saas.</p>
            <p><strong>IaaS (Infrastructure as a Service)</strong> - it is special type of Clouding Computing. This type carries more information than any cloudinbg system, that we have ever had. What does this system give us? IaaS gives us the necessary count of dynamic resourses, that will lend us in future work with the project. In the past we had to use different software for our equipment, however, modern solutions give us an opportunity to implement all of our functionality on one platform. This way will streamline development process. IaaS avoids demanding client, network IT-infrastructures, data infrastructures.</p>
            <?= $this->render('//layouts/_estimate') ?>
            <p><strong>PaaS Service (Platform-as-a-Service)</strong>. This service represents the concrete platform. PaaS offers developers the development environment. This service is primary used for software development. PaaS is very confidence and high reliability service. Nowadays, PaaS is the best choice for software development.</p>
            <p><strong>SaaS (Software as a service)</strong>. One of the form of Clouding Computing. In this type of clouding technologies, software app is a off the peg product. The main advantage of SaaS - absence of different development expenses (upgrade,download,upload system equipment). SaaS is really adapt for remote control. Thunderrise also use it in development process. Our team use it like defence against counterfeit software.</p>
            <p>Thunderrise use all of that system in our projects. With the help of it, our employees and customers will have remote access to their personal data. Let's do great thing together! We are waiting for your message!</p>
          </div>
        <?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
    </div>
</div>
<?= $this->render('//layouts/_blog_random') ?>