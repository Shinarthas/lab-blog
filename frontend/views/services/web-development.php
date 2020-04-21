<?php
$this->title = ucfirst(Yii::$app->controller->id);

$this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'Websites have become an integral part of business and stand for universal and convenient way to interact with your customers and acquire new ones. Our polished website will be a pleasant and beneficial addition to your business.']);



?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">

    <div class="row">
        <?php
        $h1= isset($pages[$_GET['category']]) ? (isset($pages[$_GET['category']]['name']) ? $pages[$_GET['category']]['name'] : ucfirst(str_replace('-',' ',$pages[$_GET['category']]['view']))) : "";
        if(!empty($h1) && isset($_GET['subcategory']))
        {
            $h1.='. '.(isset($pages[$_GET['category']]['pages'][$_GET['subcategory']]) ? (isset($pages[$_GET['category']]['pages'][$_GET['subcategory']]['name']) ? $pages[$_GET['category']]['pages'][$_GET['subcategory']]['name'] : ucfirst(str_replace('-',' ',$pages[$_GET['category']]['pages'][$_GET['subcategory']]))) : "");
        }
        ?>
        <h1><?=$h1?></h1>
    </div>
</div>
<div class="container">
    <div class="row">
          <div class="content">
            <p>Website is really important for your company since basically it is inherent part of your business. And with the help of our Dev Team it will surely reach great goals. Every web project turns up as a complicated process, but the overall process of developing a complex website generally follows six major stages that you should think through before crafting your final project, planning and proposal documents:</p>
            <ul>
                <li>Site definition and planning</li>
                <li>Information architecture</li>
                <li>Site design</li>
                <li>Site construction</li>
                <li>Site marketing</li>
                <li>Tracking, evaluation, and maintenance</li>
            </ul>
            <p>Developing a huge website is a process that may have wide budgetary and public relations consequences for an organization, both during the development of the site and long after its disposal. Too many websites begin life as the moment arises, created by small interest groups working in isolation from their peers elsewhere in the organization and without fully considering the site’s goals within the context of the organization’s overall mission. The result of poorly planned, hasty development efforts often is an “orphan site,” starved of resources and attention.</p>
            <?= $this->render('//layouts/_estimate') ?>
            <p>Thunderrise thinks a lot before starting act. We make sure that we have the organizational approval, budget, and staff. In this case, we will make a successful project!</p>
            <p>Our web-development team consist of such departments: front-end developers, back-end developers, Q&A, Project Management.</p>
            <p>For more details please proceed to next sections:</p> 
            <ul>
                <li>Industry</li>
                <li>Our way of development</li>
                <li>Development sequence</li>
                <li>Databank</li>
                <li>CMS</li>
                <li>Responsive</li>
                <li>Enterprise solutions</li>
                <li>SEO</li>
            </ul>
            <p>Please have a look at it and give us your opinion! We are looking forward to your message.</p>
          </div>
        <?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
    </div>
</div>
<?= $this->render('//layouts/_blog_random') ?>