<?php
$this->title = ucfirst(Yii::$app->controller->id);

$this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'About just ten years ago, people didn’t even imagine the possibilities that wearable devices can offer. WT have started a new age in technologies. Both personal and business life changes with its usage. It allows to achieve goals, track them, optimize and enhance the working process.']);
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
            <h2>Personal and business solutions</h2>
            <p>Hello, in this section we will describe a <strong>wearable tech</strong>. Our company is keen on developing special apps for this kind of gadgets. So, let's find out more about it!</p>
            <p><strong>What is wearable tech?</strong></p>
            <p>Wearable technology is clearly gadgets you wear, but there are important differentiation. Wearable tech isn't a trendy pair of headphones, for example, or a digital watch.</p>
            <p>The new age of wearables     establish communication with the connected self – they're post with smart sensors, and make use of a web connection, usually using Bluetooth to connect wirelessly to your smartphone. They use these sensors to connect to you as a person, and they help you to rich goals such as staying happy, active, losing weight or being more organised.</p>
            <?= $this->render('//layouts/_estimate') ?>
            <p><strong>How do we wear them?</strong></p>
            <p>Most wearables are bracelet, but an increasing number can be clipped to the body and hung around the neck. Wearables are quickly blending with jewellery, and are worn in the same way. Watches, rings, pendents – these things are all wearables gadgets, that we unaware of!</p>
            <p><strong>What type of wearable tech do we use every day?</strong></p>
            <p>In our subcategories of this section, we will describe some main kinds of wearables gadgets such as: Personal and business solutions, Fitness & sports , Smartwatch, Smartglasses, Augmented reality, Wearable future, Health & medicine</p>
            <p>We really can't imagine our life without these gadgets. It has become an integral part of our lives!</p>
            <p>Read our next statement about <strong>wearable tech</strong> and contact us for developing your own app for this gadgets! We're waiting for your message!</p>
            <p>Thunderrise - follow your dream and let us bring it to life!</p>
          </div>
<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
    
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>