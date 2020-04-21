<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'Depending on your business needs, whether you are running new social networking service or support your enterprise solution, cloud computing offers you best cost/productivity ratio for an IT resource. With the help of a cloud, you can now think of a real scalability for your business, without any additional investment in hardware purchase, support or administration and other expenses connected with in house computing resource management.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Advantages of cloud computing</h2>
            <p>Depending on your business needs, whether you are running new social networking service or support your enterprise solution, cloud computing offers you best cost/productivity ratio for an IT resource. With the help of a cloud, you can now think of a real scalability for your business, without any additional investment in hardware purchase, support or administration and other expenses connected with in house computing resource management. In 2014 worldwide companies spent over  billion on services of cloud computing. The reason of such a growing demand is an ability to get exactly what you need, when you need and adjust the resource for your company's specific requirements.</p>
            <p>Cloud computing offers the best balance between cost and productivity for an IT platform. Using cloud servers, you don’t need any additional hardware, support or other expenses so it’s a good feature to save money and concentrate on actual business goals. Cloud computing now has a growing demand whether you support your enterprise solution or running new service you have an ability to get exactly what you need.</p>
            <?= $this->render('//layouts/_estimate') ?>
            <p>There are a lot of ways to use a cloud. Let’s list the most common:</p>
            <ul>
                <li>Data backup. You won’t lose any information after a system failure. Cloud creates copies of your data off-site where it will be safe from errors, theft of malfunction.</li>
                <li>Mobile working. It grants you an access to your data whenever you are. You can also synchronize work process with your colleagues. It also allow you to essentially take your office with you on the road.</li>
                <li>File storage. As it was said above, you don’t need tons of hardware to keep your data in touch.</li>
                <li>Information sharing. A lot popular among in-house or freelance staff. Cloud allows to skip a cumbrous process of sending and saving large files.</li>
            </ul>
            <p>According to this, let’s list the most evident benefits of using Cloud Computing platforms:</p>
            <ul>
                <li>Automatic software updates. You don’t to worry about maintaining the system yourself. Vendor takes care of all software and security update so you can focus on your business goals.</li>
                <li>Less money expenditure. Cloud computing obliterates the high cost on hardware. All you need is to pay a subscription.</li>
                <li>Increased security. Lost or stolen laptops are no longer a problem. Using a Cloud Computing, you have an access to your data no matter what happens to you machine. You can also perform a bulk erase all the data from the lost laptop so it won’t get into the hands of wrong people.</li>
            </ul>
                <p>lab3m provides the implementation of the most popular cloud computing models. Let’s list them to have a better understanding from what to choose:</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>