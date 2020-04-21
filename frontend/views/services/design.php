<?php
$this->title = ucfirst(Yii::$app->controller->id);

$this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'Nowadays, innovations in technologies boost the progress in design. So there are some newer trends in web designing. The first thing is that web designing is spreading mobile and becoming more and more mobile friendly. Designers pay lots of attention on well functioning on mobile devices. On the other side, a new web designing trend is about integrating everything on the site with social networks, email subscriptions, parallax design etc. All these things are done to make users mobile experience as comfortable as possible.']);
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
            <p>Nowadays, innovations in technologies boost the progress in design. So there are some newer trends in web designing. The first thing is that web designing is spreading mobile and becoming more and more mobile friendly. Designers pay lots of attention on well functioning on mobile devices. On the other side, a new web designing trend is about integrating everything on the site with social networks, email subscriptions, parallax design etc. All these things are done to make users mobile experience as comfortable as possible.</p>
            <p>Another trend in web designing is about minimizing UI. Flat designs are more favourable for mobile interface. So called “material design” provides better mobile browsing experience by enhancing visual part. It’s a product of Google’s guidelines that were set for better mobile using.</p>
            <?= $this->render('//layouts/_estimate') ?>
            <p>lab3m use UI and UX design. There are some main definition between this kind of design. UX Design exiles to the term User Experience Design, while UI Design stands for User Interface Design. Both elements are crucial to a product and work closely together. The roles themselves are quite different, referring to very different parts of the process and the design discipline. Where UX Design is a more analytical and technical field, UI Design is closer to what we refer to as graphic design, though the manadates are somewhat more complex.</p>
            <p>Let's resume main tips of Design in our company:</p>
            <ul>
                <li>User Experience Design is the process of development and enhancement of quality interaction between a customer and all facets of a company</li>
                <li>User Interface Design is responsible for the transference of a brand’s forces and visual holdings to a product’s interface as to best increase the cusomer’s experience.</li>
                <li>These both kind of Design are crucial, and while there are millions of examples of great products with one and not the other, imagine how much more successful they might have been when strong in both fields</li>
            </ul>
            <p>lab3m introduces both of it! lab3m - follow your dream! Contact us right now and let's do great project together!</p>
          </div>
<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
    
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>